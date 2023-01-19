<template>
  <div class="content">
    <div class="card">
      <div class="card-body"></div>
    </div>
    <div class="card card-table">
      <div class="card-body">
        <div class="table-responsive">
          <table id="example" class="table table-striped">
            <thead>
              <tr>
                <th>Intitulé</th>
                <th>Date Proposition</th>
                <th>Duree</th>
                <th>Nbre Heures</th>
                <th>Lieu Formation</th>
                <th>Doctorants Cibles</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>
                  <div class="btn-group">
                    <button
                      class="btn btn-primary btn-sm dropdown-toggle"
                      type="button"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                    >
                      Voir
                    </button>
                    <ul class="dropdown-menu">
                      ...
                    </ul>
                  </div>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div class="add">
      <button class="fav btn btn-primary" type="button">
        Ajouter formation
      </button>
    </div>
  </div>
</template>

<script>
export default {
  name: "Formations",
  mounted() {
    console.log("Component mounted.");
  },
};
</script>

<style scoped>
.card {
  padding: 0px;
  margin: 15px;
}

.content .add {
  margin: auto;
  width: 200px;
  border-radius: 100px;
}

.btn-primary {
  background-color: #037cc2;
  border-color: #037cc2;
}
</style>