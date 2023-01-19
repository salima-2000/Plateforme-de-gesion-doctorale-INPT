<template>
  <div class="content">
    <div class="titre">
      <h1>Compte</h1>
    </div>
  </div>
</template>

<script>
export default {
  name: "Dashboard",
  mounted() {
    console.log("Component mounted.");
  },
};
</script>

<style scoped>
.titre {
  text-align: center;
  margin-left: auto;
  margin-right: auto;
  width: 100;
}
</style>