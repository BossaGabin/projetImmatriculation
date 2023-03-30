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
              <h5 class="card-title">La liste des utilisateurs</h5>
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
                    <h4 class="modal-title">Remplir le formulaire</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
            
                  <!-- Modal body -->
                  <div class="modal-body">
                    <form action="/action_page.php">
                      <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Nom complet:</label>
                        <input type="text" class="form-control" id="nom" placeholder="Entrer le nom " name="nom">
                      </div>
                      <div class="mb-3">
                        <label for="pwd" class="form-label">Username:</label>
                        <input type="text" class="form-control" id="username" placeholder="Entrer la username" name="username">
                      </div>
                      <div class="mb-3">
                        <label for="pwd" class="form-label">Email:</label>
                        <input type="mail" class="form-control" id="email" placeholder="Entrer le email" name="email">
                      </div>
                      <div class="mb-3">
                        <label for="pwd" class="form-label">Mot de passe:</label>
                        <input type="password" class="form-control" id="password" name="password">
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
                    <th scope="col">Nom Complet</th>
                    <th scope="col">Nom  d'utilisateur</th>
                    <th scope="col">Email</th>
                     <th scope="col">Date d'ajout</th>
                    <th scope="col">Statut</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($utilisateurs as $utilisateur)                    
                  <tr>
                    <th scope="row">{{$utilisateur->id}}</th>
                    <td>{{$utilisateur->nomComplet}}</td>
                    <td>{{$utilisateur->username}}</td>
                    <td>{{$utilisateur->email}}</td>                    
                    <td>{{$utilisateur->created_at}}</td>
                    <td><button class="btn btn-success">Actif</button></td>
                    <td>
                      <div style="display:flex;">
                        <button class="btn btn-warning bi bi-pencil" style="color:white"></button>                      
                        <button class="btn btn-danger bi bi-trash" style=" margin-left:10px"></button>
                      </div>
                    </td>
                  </tr>  
                  @endforeach
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