@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Sous categorie</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Sous categories</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Enregistrer une sous categorie</h5>
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
                    <label for="inputNanme4" class="form-label">Nom sous categorie</label>
                    <input type="text" class="form-control" id="inputNanme4" placeholder="Entrer sous categorie" required>
                </div> <!-- End sous categorie -->

                  <div class="">
                     <button type="submit" class="btn btn-success">J'enregistre une sous categorie</button>
                  </div><!-- End submit -->
              </form>
         </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection