@extends('layout')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">
     
      <nav>
        <h5 class="card-title">La liste des Vehicules</h5>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
              @endif 
              {{-- <p>Add lightweight datatables to your project with using the <a href="https://github.com/fiduswriter/Simple-DataTables" target="_blank">Simple DataTables</a> library. Just add <code>.datatable</code> class name to any table you wish to conver to a datatable</p> --}}

              <!-- Table with stripped rows -->
              <!--boutton Modal  Nouveau   -->
              <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModalV" style="margin-left:90%">
                Nouveau
              </button>
            </div>
            
            <!-- The Modal -->
            <div class="modal" id="myModalV">
              <div class="modal-dialog">
                <div class="modal-content">
            
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Remplir le formulaire</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
            
                  <!-- Modal body -->
                  <div class="modal-body">
                    <form action="{{ route('vehicule') }}" method="POST">
                      @csrf
                      <div class="mb-3 mt-3">
                        <label for="cars">Nom complet:</label>
                          <select name="proprietaire_id" id="cars" class="form-control">
                            <option value="volvo">Choisir un proprietaire</option>
                            @foreach ($proprietaires as $proprietaire)
                            <option value="{{$proprietaire->id}}">{{$proprietaire->nomComplet}}</option>                              
                            @endforeach
                          </select>
                      </div>
                      <div class="mb-3">
                        <label for="cars">Type:</label>
                          <select name="type" id="cars" class="form-control">
                            <option value="type">Choisir le type de vehicule</option>                            
                            <option value="2roues">2roues</option>                          
                            <option value="3roues">3roues</option>                          
                            <option value="4roues">4roues</option>                          
                          </select>                       
                      </div>
                      <div class="mb-3">
                        <label for="pwd" class="form-label">Marque:</label>
                        <input type="text" class="form-control" id="marque" placeholder="Entrer la marque" name="marque">
                      </div>
                      <div class="mb-3">
                        <label for="pwd" class="form-label">Modèle:</label>
                        <input type="text" class="form-control" id="modele" placeholder="Entrer le moèle" name="modele">
                      </div>
                      <div class="mb-3">
                        <label for="pwd" class="form-label">Image:</label>
                        <input type="file" class="form-control" id="image" name="image">
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
                    <th scope="col">Type</th>
                    <th scope="col">Marque</th>
                    <th scope="col">Modele</th>
                    <th scope="col">Plaque</th>
                     <th scope="col">Date d'ajout</th>
                    <th scope="col">Statut</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>  
                  @forelse ($vehicules as $vehicule)
                  @dd($vehicule->Proprietaire);
                  <tr>
                    <th scope="row">{{$loop->index +1}}</th>
                    <td>{{$vehicule->Proprietaire->nomComplet}}</td>
                    <td>{{$vehicule->type}}</td>
                    <td>{{$vehicule->marque}}</td>                    
                    <td>{{$vehicule->modele}}</td>                    
                    <td>{{$vehicule->modele}}</td>                    
                    <td>{{$vehicule->created_at}}</td>
                    <td><button class="btn btn-success">Actif</button></td>
                    <td>
                      <div style="display:flex;">
                        <button class="btn btn-warning bi bi-pencil" style="color:#fbfcf9"></button>                      
                        <button class="btn btn-danger bi bi-trash" style=" margin-left:10px"></button>
                      </div>
                    </td>
                  </tr>  
                    
                  @empty
                    
                  @endforelse
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