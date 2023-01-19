<template>
  <div class="vue-pagination flex-c-e" v-if="!disabled">
    <div v-if="showTotal && total >= 0" class="pagination-total">
      {{ total }}
    </div>
    <div
      v-if="pageSizes && pageSizes.length > 0"
      class="pagination-size flex-c-b"
      @click="showPageSizeOptions = !showPageSizeOptions"
      ref="pSize"
    >
      <span class="size-text"
        >{{ size }}/{{ lang === "en_US" ? "page" : "页" }}</span
      >
      <!-- <span class="size-icon">
        <i class="iconfont iconup"></i>
      </span> -->
      <transition name="zoom-in-top">
        <div class="size-options" v-show="showPageSizeOptions">
          <div
            v-for="(item, index) in pageSizes"
            :key="index"
            class="size-item flex-c"
            @click.stop="onSelect(index)"
          >
            {{ item }}/{{ lang === "en_US" ? "page" : "页" }}
          </div>
        </div>
      </transition>
    </div>
  </div>
</template>

<script>
import ClickOutside from "../utils/clickoutside.js";
const pageCountMax = 4;
export default {
  name: "VuePagination",
  data() {
    return {
      clickOutside: null,
      pages: [],
      size: 5, // Afficher la quantité par page
      showPageSizeOptions: false,
      pageCount: 1, // Nombre de pages
      currentPage: 1, // Numéro de la page actuelle
    };
  },
  props: {
    total: Number,
    pageSize: Number,
    pageSizes: { type: Array, default: () => [5, 10, 15, 20] },
    disabled: { type: Boolean, default: false },
    showTotal: { type: Boolean, default: false },
    lang: { type: String, default: "en_US" },
  },
  computed: {
    disableForward() {
      return this.currentPage === 1;
    },
    disableNext() {
      return this.currentPage === this.pageCount;
    },
  },
  watch: {
    total: {
      handler(v) {
        if (v > 0 && this.size > 0) {
          this.$nextTick(() => {
            this.initPages(v);
          });
        }
      },
      immediate: true,
    },
    pageSize: {
      handler(v) {
        if (v > 0 && this.size !== v) {
          this.size = v;
          this.total > 0
            ? this.$nextTick(() => {
                this.initPages(this.total);
              })
            : "";
        }
      },
      immediate: true,
    },
    pageSizes: {
      handler(v) {
        if (v && v.length > 0 && this.size !== this.pageSize) {
          this.size = v[0];
        }
        this.showPageSizeOptions = false;
      },
      deep: true,
      immediate: true,
    },
  },
  mounted() {
    let selfEle = this.$refs.pSize;
    if (selfEle) {
      this.clickOutside = new ClickOutside([selfEle], document, () => {
        this.showPageSizeOptions = false;
      });
      this.clickOutside.bind();
    }
  },
  beforeDestroy() {
    if (this.clickOutside && this.clickOutside.unbind) {
      this.clickOutside.unbind();
    }
  },
  methods: {
    initPages(total) {
      if (!(total > 0)) return;
      this.pageCount = Math.ceil(total / this.size);
      this.toPage(1);
    },
    onSelect(index) {
      if (
        this.pageSizes &&
        this.pageSizes.length > index &&
        this.size !== this.pageSizes[index]
      ) {
        this.size = this.pageSizes[index];
        this.$emit("size", this.size);
        this.$nextTick(() => {
          this.initPages(this.total);
        });
      }
      this.showPageSizeOptions = false;
    },
  },
};
</script>

<style lang="scss" scoped>
$textColor: rgba(0, 0, 0, 0.85);
$normalColor: rgba(0, 0, 0, 0.65);
$disabledColor: rgba(0, 0, 0, 0.25);
$borderColor: rgba(217, 217, 217, 1);
$activeColor: #046fdb;
$fontFamily: Arial, Helvetica, sans-serif;
.pagination-total {
  font-family: $fontFamily;
  box-sizing: border-box;
  height: 22px;
  line-height: 22px;
  margin-right: 12px;
  font-size: 12px;
  color: $textColor;
}
.pagination-size {
  font-family: $fontFamily;
  position: relative;
  box-sizing: border-box;
  height: 22px;
  min-width: 80px;
  padding: 0 6px;
  margin-right: 12px;
  font-size: 12px;
  font-weight: 500;
  color: $textColor;
  outline: 0;
  border: 1px solid $borderColor;
  cursor: pointer;
  i.iconfont {
    font-size: 12px;
    height: 12px;
    width: 12px;
    font-weight: 500;
  }
  .size-icon {
    height: 12px;
    width: 12px;
  }
  .size-text {
    margin-right: 16px;
  }
  .size-options {
    position: absolute;
    box-sizing: border-box;
    padding: 4px 0px;
    outline: 0;
    z-index: 9999;
    bottom: calc(100% + 2px);
    left: -1px;
    right: -1px;
    border: 1px solid $borderColor;
    box-shadow: 0px 2px 12px 0 rgba(0, 0, 0, 0.1);
    overflow: hidden;
    background-color: #ffffff;
    cursor: auto;
    .size-item {
      outline: 0;
      padding: 4px 6px;
      cursor: pointer;
      overflow: hidden;
    }
    .size-item:hover {
      background-color: #f1f3f5;
    }
  }
}
.page-item {
  font-family: Arial, Helvetica, sans-serif;
  box-sizing: border-box;
  height: 22px;
  width: 22px;
  font-size: 12px;
  color: $textColor;
  border: 1px solid $borderColor;
  border-right: none;
  outline: 0;
  cursor: pointer;
  i.iconfont {
    font-size: 12px;
    height: 12px;
    width: 12px;
    font-weight: 500;
  }
}
.page-item,
.pagination-size {
  user-select: none;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -webkit-user-drag: none;
}
</style>