@extends('layout')
@section('content')
<main id="main" class="main">

    <div class="pagetitle">      
      <nav>
        <h5 class="card-title">La liste des propriétaires</h5>
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
                        
            </div>
             <!--boutton Modal  Nouveau   -->  
             <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal" style="margin-left:90%">
              Nouveau
            </button>
            
            <!-- The Modal -->
            <div class="modal" id="myModal">
              <div class="modal-dialog">
                <div class="modal-content">
            
                  <!-- Modal Header -->
                  <div class="modal-header">
                    <h4 class="modal-title">Renseigner les informations du proprietaire</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                  </div>
            
                  <!-- Modal body -->
                  <div class="modal-body">                                 
                     <form action="{{ route('proprietaire') }}" method="POST">
                      @csrf
                      <div class="mb-3 mt-3">
                        <label for="nom" class="form-label">Nom complet:</label>
                        <input type="text" class="form-control" id="nom" placeholder="Entrer le nom complet" name="nom" >
                      </div>
                      <div class="mb-3">
                        <label for="pwd" class="form-label">Email:</label>
                        <input type="mail" class="form-control" id="email" placeholder="Entrer le email" name="email">
                      </div>
                      <div class="mb-3">
                        <label for="pwd" class="form-label">Telephone:</label>
                        <input type="text" class="form-control" id="telephone" placeholder="Entrer le telephone" name="telephone">
                      </div>
                      <div class="mb-3">
                        <label for="pwd" class="form-label">Adresse:</label>
                        <input type="text" class="form-control" id="adresse" name="adresse">
                      </div>
                      <div class="mb-3">
                        <label for="pwd" class="form-label">Piece d'identite:</label>
                        <input type="file" class="form-control" id="piece" name="piece">
                      </div>
                      <div class="mb-3">
                        <label for="pwd" class="form-label">NIP:</label>
                        <input type="number" class="form-control" id="nip" name="nip">
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
                    <th scope="col">Email</th>
                    <th scope="col">Telephone</th>
                    {{-- <th scope="col">NIP</th> --}}
                    <th scope="col">Adresse</th>
                    <th scope="col">Date</th>
                    <th scope="col">Statut</th>
                    <th scope="col">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  
                  @foreach($proprietaires  as $proprietaire)
                    <tr>
                    <th scope="row">{{ $proprietaire->id }}</th>
                    <td>{{ $proprietaire->nomComplet }}</td>
                    <td>D{{ $proprietaire->email }}</td>
                    <td>{{ $proprietaire->telephone }}</td>
                    {{-- <td>{{ $proprietaire->nip }}</td> --}}
                    <td>{{ $proprietaire->adresse }}</td>
                    <td>{{ $proprietaire->created_at }}</td>
                    <td><button class="btn btn-success"><span class=" glyphicon glyphicon-plus">Actif</span></button></td>
                    <td>
                     <div style="display:flex;">
                        <!--boutton Modal  Nouveau   -->  
                        <a href="#" type="submit" class="btn btn-warning bi bi-pencil" data-bs-toggle="modal" data-bs-target="#myModale{{$proprietaire->id}}" style="color:white" ></a>     
                        <!-- The Modal -->
                        <div class="modal" id="myModale{{$proprietaire->id}}">
                          <div class="modal-dialog">
                            <div class="modal-content">
                        
                              <!-- Modal Header -->
                              <div class="modal-header">
                                <h4 class="modal-title">Modifier les informations du proprietaire</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                              </div>
                        
                              <!-- Modal body -->
                              <div class="modal-body">                                 
                                <form action="{{ route('proprietaire.update',$proprietaire->id ) }}" method="POST">
                                  @csrf
                                  @method('patch')
                                  <div class="mb-3 mt-3">
                                    <label for="nom" class="form-label">Nom complet:</label>
                                    <input type="text" class="form-control" id="nom" placeholder="" name="nom" value="{{$proprietaire->nomComplet}}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="pwd" class="form-label">Email:</label>
                                    <input type="mail" class="form-control" id="email"  name="email" value="{{$proprietaire->email}}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="pwd" class="form-label">Telephone:</label>
                                    <input type="text" class="form-control" id="telephone" name="telephone" value="{{$proprietaire->telephone}}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="pwd" class="form-label">Adresse:</label>
                                    <input type="text" class="form-control" id="adresse" name="adresse" value="{{$proprietaire->adresse}}">
                                  </div>
                                  <div class="mb-3">
                                    <label for="pwd" class="form-label">Piece d'identite:</label >
                                    <input type="file" class="form-control" id="piece" name="piece" value="{{$proprietaire->pieceIdentite}}" >
                                  </div>
                                  <div class="mb-3">
                                    <label for="pwd" class="form-label">NIP:</label>
                                    <input type="number" class="form-control" id="nip" name="nip" value="{{$proprietaire->nip}}" >
                                  </div>
                                    <button type="submit" class="btn btn-success">Valider</button>
                                </form>
                              </div>
                        
                              <!-- Modal footer -->
                              <div class="modal-footer">
                                <button type="submit" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                              </div>
                        
                            </div>
                          </div>
                        </div>           
                          <!-- End boutton Modal  Nouveau   -->   
                          <form action="{{ route('proprietaire.delete',$proprietaire->id ) }}" method="POST">
                            @csrf
                            @method('delete')
                            <a href="" class="btn btn-danger bi bi-trash" style=" margin-left:10px"></a>   
                          </form>                   
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