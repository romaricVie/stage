@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Employés</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('employes.index')}}">Home</a></li>
          <li class="breadcrumb-item active">Employés</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <!-- Alert Messages -->

          @if(session('success'))
                <script type="text/javascript">
                    swal("Félicitations!","{!! session('success') !!}","success",{
                        button:"OK"
                    })
               </script>
           @endif
    <section class="section dashboard">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Enregistrer un employé</h5>
             <!-- Employes Form -->
              <form  
                    class="row g-3"
                    method="POST"
                    action="{{route('employes.store')}}" 
              >
              @csrf
                  <div class="col-6">
                      <label for="inputNanme4" class="form-label">Nom <span class="text-danger"> *</span></label>
                      <input type="text" name="name"  class="form-control" id="inputNanme4" placeholder="Entrer nom" required>
                  </div>
                  <div class="col-6">
                      <label for="inputNanme9" class="form-label">Prenoms <span class="text-danger"> *</span></label>
                      <input type="text" name="firstname" class="form-control" id="inputNanme9" placeholder="Entrer prenoms" required>
                  </div>
                   <div class="col-6">
                      <label for="inputNanme7" class="form-label">Fonction <span class="text-danger"> *</span></label>
                      <input type="text" name="fonction" class="form-control" id="inputNanme7" placeholder="Entrer la fonction" required>
                  </div>
                   <div class="col-6">
                    <label for="inputEntite" class="form-label">Entité <span class="text-danger"> *</span></label>
                    <select name="entite_id" class="form-select form-select-sm" id="inputEntite" aria-label=".form-select-sm example">
                         <option selected>Choisir une entité</option>
                         @foreach($entites as $entite)
                            <option value="{{$entite->id}}">{{$entite->name}}</option>
                         @endforeach
                  </select>
                </div>
                  <div class="col-6">
                      <label for="inputNanme6"  class="form-label">Email <span class="text-danger"> *</span></label>
                      <input type="email" name="email" class="form-control" id="inputNanme6" placeholder="Entrer email" required>
                  </div>
                 

                  <div class="col-6">
                      <label for="inputNanme8" class="form-label">Contact <span class="text-danger"> *</span></label>
                      <input type="text" name="contact" class="form-control" id="inputNanme8" placeholder="Entrer contact" required>
                  </div>
                   <div class="col-6">
                      <label for="inputNanme10" class="form-label">Numéro flotte</label>
                      <input type="text" name="flotte" class="form-control" id="inputNanme10" placeholder="Entrer numéro flotte" >
                  </div>
                   <div class="col-6">
                      <label for="inputNanme01" class="form-label">Ligne fixe</label>
                      <input type="text" name="fixe" class="form-control" id="inputNanme01" placeholder="Entrer le fixe">
                  </div>
                 
                  <div class="col-6">
                     <label for="" class="form-label">Statut <span class="text-danger"> *</span></label>
                       <div class="form-check">
                           <input class="form-check-input" type="radio" name="statut" value="actif" id="flexRadioDefault2">
                           <label class="form-check-label" for="flexRadioDefault2">
                           Actif
                          </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="statut" value="inactif" id="flexRadioDefault3">
                           <label class="form-check-label" for="flexRadioDefault3">
                           Inactif
                          </label>
                       </div>
                </div>

                <div class="col-6">
                     <label for="" class="form-label">Type de contrat <span class="text-danger"> *</span></label>
                       <div class="form-check">
                           <input class="form-check-input" type="radio" name="contrat" value="cdi" id="flexRadioDefault1">
                           <label class="form-check-label" for="flexRadioDefault1">
                           CDI
                          </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="contrat" value="cdd" id="flexRadioDefault4">
                           <label class="form-check-label" for="flexRadioDefault4">
                           CDD
                          </label>
                       </div>
                </div>
                  <div class="col-6 form-floating">
                        <textarea class="form-control" name="autres" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Autres infos</label>
                  </div><!--End autre--> 

                  <div class="">
                     <button type="submit" class="btn btn-success">J'enregistre un employé</button>
                  </div>
              </form>
         </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection