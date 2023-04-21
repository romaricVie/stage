@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Reparation</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Réparation</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Enregistrer une réparation</h5>
             <!-- Employes Form -->
              <form  

                 class="row g-3"
                 method="POST"
                 action="{{route('reparations.store')}}"
                 >
                  @csrf
                 <div class="col-6">
                      <label for="inputCategorie" class="form-label">Biens</label>
                      <select name="bien_id" class="form-select form-select-sm" id="inputCategorie" aria-label=".form-select-sm example">
                           <option selected>Choisir un bien</option>
                            @foreach($biens as $bien)
                              <option value="{{$bien->id}}">(#{{$bien->id}}) {{$bien->name}}</option>
                           @endforeach
                    </select>
                  </div><!-- End Bien -->

                  <div class="col-6">
                      <label for="inputNanme4" class="form-label">Nom maintenancier</label>
                      <input type="text" name="maintenancier" class="form-control" id="inputNanme4" placeholder="Entrer nom" required>
                  </div>
                  <div class="col-6">
                      <label for="inputNanme9" class="form-label">Contacts</label>
                      <input type="text" name="contact_maintenancier" class="form-control" id="inputNanme9" placeholder="Entrer contact" required>
                  </div>
                   <div class="col-6">
                      <label for="inputNanme7" class="form-label">Coût de la maintenance</label>
                      <input type="text" name="price" class="form-control" id="inputNanme7" placeholder="Entrer montant" required>
                  </div><!--End coût -->

                   <span class="text-center fs-3">Date réparation</span>
                    <div class="col-4">
                        <label for="inputDay" class="form-label">Jour</label>
                        <input type="text" name="day" class="form-control" id="inputDay" placeholder="Entrer le jour" required>
                    </div>    
                     <div class="col-4">
                        <label for="inputMonth" class="form-label">Mois</label>
                        <input type="text" name="month" class="form-control" id="inputMonth" placeholder="Entrer le mois" required>
                    </div>  
                    <div class="col-4">
                        <label for="inputYear" class="form-label">Année</label>
                        <input type="text" name="year" class="form-control" id="inputYear" placeholder="Entrer annee" required>
                    </div>
                    <div class="col-6">
                     <label for="" class="form-label">Etat du bien</label>
                       <div class="form-check">
                           <input class="form-check-input" type="radio" name="etat" value="bon" id="flexRadioDefault1">
                           <label class="form-check-label" for="flexRadioDefault1">
                           Bon
                          </label>
                        </div>
                      <div class="form-check">
                            <input class="form-check-input" type="radio" name="etat" value="hors_service" id="flexRadioDefault3">
                           <label class="form-check-label" for="flexRadioDefault3">
                           Hors service
                          </label>
                     </div>
                  </div><!--End etat -->

                  <div class="col-6 form-floating">
                    <textarea name="description_panne" class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                      <label for="floatingTextarea">Description</label>
                </div><!--End description --> 

                  <div class="">
                     <button type="submit" class="btn btn-success">Enregistrer réparation</button>
                  </div>
              </form>
         </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection