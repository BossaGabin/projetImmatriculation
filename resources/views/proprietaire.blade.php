@extends('layout')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
      <h1>Les données</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Accueil</a></li>
          <li class="breadcrumb-item">Les données </li>
         
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">La liste des propriétaires</h5>
              {{-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> --}}

              <!-- Table with stripped rows -->
              <!--boutton Modal  Nouveau   -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" style="margin-left:90%">
                Nouveau
              </button>
            </div>
            
            <!-- The Modal -->
            <div class="modal" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">
            
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Renseigner les informations du vehicules</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
            
                  <!-- Modal body -->
                  <div class="modal-body">
                    <form action="/action_page.php">
                      <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Type:</label>
                        <input type="number" class="form-control" id="type" placeholder="Entrer type du vehicule" name="type" min="2" max="4" size="5">
                      </div>
                      <div class="mb-3">
                        <label for="pwd" class="form-label">Marque:</label>
                        <input type="text" class="form-control" id="marque" placeholder="Entrer la marque" name="marque">
                      </div>
                      <div class="mb-3">
                        <label for="pwd" class="form-label">Modele:</label>
                        <input type="text" class="form-control" id="modele" placeholder="Entrer le modele" name="modele">
                      </div>
                      <div class="mb-3">
                        <label for="pwd" class="form-label">Image:</label>
                        <input type="file" class="form-control" id="image" name="image">
                      </div>
                      <div class="mb-3">
                        <label for="pwd" class="form-label">Plaque d'imatriculation:</label>
                        <input type="text" class="form-control" id="plaque" name="plaque">
                      </div>
                      
                      <button type="submit" class="btn btn-success">Valider</button>
                    </form>
                  </div>
            
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                  </div>
            
                </div>
              </div>
            </div>
            

              <!-- End boutton Modal  Nouveau   -->

              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom Complet du Propriétaire</th>
                    <th scope="col">Email</th>
                    <th scope="col">Telephone</th>
                    <th scope="col">Adresse</th>
                    <th scope="col">Date d'ajout</th>
                    <th scope="col">Statut</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Brandon Jacob</td>
                    <td>Designer@gmail.com</td>
                    <td>2825252525</td>
                    <td>RUE254</td>
                    <td>2016-05-25</td>
                    <td><button class="btn btn-success">Actif</button></td>
                    <td></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Brandon Jacob</td>
                    <td>Designer@gmail.com</td>
                    <td>2825252525</td>
                    <td>RUE254</td>
                    <td>2016-05-25</td>
                    <td><button class="btn btn-danger">Inactif</button></td>
                    <td></td>
                    <tr>
                      <th scope="row">3</th>
                      <td>Brandon Jacob</td>
                      <td>Designer@gmail.com</td>
                      <td>2825252525</td>
                      <td>RUE254</td>
                      <td>2016-05-25</td>
                      <td><button class="btn btn-success">Actif</button></td>
                      <td></td>
                    </tr>                    
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>

        </div>
      </div>
    </section>

  </main><!-- End #main -->


@endsection