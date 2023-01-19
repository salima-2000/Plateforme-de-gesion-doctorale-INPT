<template>
  <div class="content">
    <div class="card">
      <div class="card-body">
        <button
          class="btn btn-outline-secondary btn-md dropdown-toggle pull-right"
          type="button"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false"
        >
          Export
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="#">EXCEL</a>
          <a class="dropdown-item" href="#">PDF</a>
          <a class="dropdown-item" href="#">PNG</a>
        </div>
      </div>
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
              <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
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