@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Sous sous categorie</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Sous sous categories</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Enregistrer une sous sous categorie</h5>
             <!-- Categorie Form -->
              <form  class="row g-3">
                  <div class="col-6">
                      <label for="inputCategorie" class="form-label">Categorie</label>
                      <select class="form-select form-select-sm" id="inputCategorie" aria-label=".form-select-sm example">
                           <option selected>Choisir une categorie</option>
                           <option value="1">Informatique</option>
                           <option value="2">Electromenager</option>
                           <option value="3">Vehicule</option>
                    </select>

                  </div><!-- End categorie -->
                  <div class="col-6">
                      <label for="inputScategorie" class="form-label">Sous Categorie</label>
                      <select class="form-select form-select-sm" id="inputScategorie" aria-label=".form-select-sm example">
                           <option selected>Choisir sous categorie</option>
                           <option value="1">Informatique</option>
                           <option value="2">Electromenager</option>
                           <option value="3">Vehicule</option>
                    </select>
                  </div><!-- End sous categorie -->

                 <div class="col-6">
                    <label for="inputNanme5" class="form-label">Nom sous sous categorie</label>
                    <input type="text" class="form-control" id="inputNanme5" placeholder="Entrer sous categorie" required>
                </div> <!-- End sous categorie -->

                  <div class="">
                     <button type="submit" class="btn btn-success">J'enregistre une sous sous categorie</button>
                  </div><!-- End submit -->
              </form>
         </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection