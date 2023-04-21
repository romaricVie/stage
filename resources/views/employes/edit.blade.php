@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Employés</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Employés</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Enregistrer un employé</h5>
             <!-- Employes Form -->
              <form  
                    class="row g-3"
                    method="POST"
                    action="{{route('employes.update',['employe' => $employe->id])}}" 
              >
                @csrf
                @method('put')
                  <div class="col-6">
                      <label for="inputNanme4" class="form-label">Nom</label>
                      <input type="text" name="name"  class="form-control" id="inputNanme4" placeholder="Entrer nom" value="{{$employe->name}}" required>
                  </div>
                  <div class="col-6">
                      <label for="inputNanme9" class="form-label">Prenoms</label>
                      <input type="text" name="firstname" class="form-control" id="inputNanme9" placeholder="Entrer prenoms" value="{{$employe->firstname}}"  required>
                  </div>
                   <div class="col-6">
                      <label for="inputNanme7" class="form-label">Fonction</label>
                      <input type="text" name="fonction" class="form-control" id="inputNanme7" placeholder="Entrer la fonction" value="{{$employe->fonction}}" required>
                  </div>
                   <div class="col-6">
                    <label for="inputEntite" class="form-label">Entité</label>
                    <select name="entite_id" class="form-select form-select-sm" id="inputEntite" aria-label=".form-select-sm example">
                         <option >Choisir une entité</option>
                         @foreach($entites as $entite)
                            <option value="{{$entite->id}}" @if($employe->entite->id === $entite->id) selected @endif >{{$entite->name}}</option>
                         @endforeach
                  </select>
                </div>
                  <div class="col-6">
                      <label for="inputNanme6"  class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="inputNanme6" placeholder="Entrer email" value="{{$employe->email}}" required>
                  </div>
                 

                  <div class="col-6">
                      <label for="inputNanme8" class="form-label">Contact</label>
                      <input type="text" name="contact" class="form-control" id="inputNanme8" placeholder="Entrer contact" value="{{$employe->contact}}" required>
                  </div>
                   <div class="col-6">
                      <label for="inputNanme10" class="form-label">Numéro flotte</label>
                      <input type="text" name="flotte" class="form-control" id="inputNanme10" value="{{$employe->flotte}}" placeholder="Entrer numéro flotte" >
                  </div>
                   <div class="col-6">
                      <label for="inputNanme01" class="form-label">Ligne fixe</label>
                      <input type="text" name="fixe" class="form-control" id="inputNanme01" placeholder="Entrer le fixe" value="{{$employe->fixe}}">
                  </div>
                 
                  <div class="col-6">
                     <label for="" class="form-label">Statut</label>
                       <div class="form-check">
                           <input 
                              class="form-check-input"
                              type="radio" name="statut"
                              value="actif" id="flexRadioDefault2"
                               @if($employe->statut ==="actif") checked  @endif

                             >
                           <label class="form-check-label" for="flexRadioDefault2">
                           Actif
                          </label>
                        </div>
                        <div class="form-check">
                            <input 
                                 class="form-check-input"
                                 type="radio" name="statut"
                                 value="inactif"
                                 id="flexRadioDefault3"
                                 @if($employe->statut ==="inactif") checked  @endif

                             >
                           <label class="form-check-label" for="flexRadioDefault3">
                           Inactif
                          </label>
                       </div>
                </div>

                <div class="col-6">
                     <label for="" class="form-label">Type de contrat</label>
                       <div class="form-check">
                           <input 
                              class="form-check-input"
                              type="radio" name="contrat"
                              value="cdi" 
                              id="flexRadioDefault1" 
                              @if($employe->contrat ==="cdi") checked  @endif
                              >
                           <label class="form-check-label" for="flexRadioDefault1">
                           CDI
                          </label>
                        </div>
                        <div class="form-check">
                            <input 
                                class="form-check-input" 
                                type="radio" name="contrat" 
                                value="cdd" id="flexRadioDefault4"
                                @if($employe->contrat ==="cdd") checked  @endif
                                >
                           <label class="form-check-label" for="flexRadioDefault4">
                           CDD
                          </label>
                       </div>
                </div>
                  <div class="col-6 form-floating">
                        <textarea class="form-control" name="autres" placeholder="Leave a comment here" id="floatingTextarea">{{$employe->autres}}</textarea>
                        <label for="floatingTextarea">Autres infos</label>
                  </div><!--End autre--> 

                  <div class="">
                     <button type="submit" class="btn btn-success">Mettre à jour</button>
                  </div>
              </form>
         </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection