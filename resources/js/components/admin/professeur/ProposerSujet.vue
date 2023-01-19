<template>
     <div class="add">

      <b-button v-b-modal.modal-prevent-closing class="btn btn-primary">
         Proposer Sujet
      </b-button>

      <b-modal id="modal-prevent-closing" ref="modal" title="Submit Your Name" @show="resetModal" @hidden="resetModal" @ok="handleOk">

         <form ref="form" @submit.stop.prevent="handleSubmit">
            <b-form-group label="Intitulé" label-for="sujet-input" invalid-feedback="Intitulé du sujet est obligatoire" :state="nameState">
               <b-form-input id="sujet-input" v-model="sujet" :state="nameState" required></b-form-input>
            </b-form-group>
            <b-form-group label="Descriptif" label-for="desc-input" invalid-feedback="Descriptif du sujet est obligatoire" :state="descState">
               <b-form-input id="desc-input" v-model="desc" :state="descState" required></b-form-input>
            </b-form-group>
         </form>

      </b-modal>
   </div>
</template>
<script>
 export default {
      data() {
         return {
            sujet: '',
            desc: null,
            nameState: null,

         }
      },
      methods: {
         checkFormValidity() {
            const valid = this.$refs.form.checkValidity()
            this.nameState = valid
            return valid
         },
         resetModal() {
            this.sujet = ''
            this.desc = null
            this.nameState = null

         },
         handleOk(bvModalEvt) {
            // Prevent modal from closing
            bvModalEvt.preventDefault()
            // Trigger submit handler
            this.handleSubmit()
         },
         handleSubmit() {
            // Exit when the form isn't valid
            if (!this.checkFormValidity()) {
               return
            }
            // Ajouter le sujet à la table

            // Hide the modal manually
            this.$nextTick(() => {
               this.$bvModal.hide('modal-prevent-closing')
            })
         }
      }
   }


</script>
