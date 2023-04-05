@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Espace</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Espace</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Enregistrer un espace</h5>
             <!-- Categorie Form -->
              <form  class="row g-3">
                  <div class="col-6">
                      <label for="inputCategorie" class="form-label">Entrepot</label>
                      <select class="form-select form-select-sm" id="inputCategorie" aria-label=".form-select-sm example">
                           <option selected>Choisir un entrepot</option>
                           <option value="1">Voodoo</option>
                           <option value="2">CHU</option>
                           <option value="3">Abidjan mall</option>
                    </select>

                  </div><!-- End entrepot -->
                  <div class="col-6">
                      <label for="inputScategorie" class="form-label">Emplacement</label>
                      <select class="form-select form-select-sm" id="inputScategorie" aria-label=".form-select-sm example">
                           <option selected>Choisir un emplacement</option>
                           <option value="1">Emplacement 1</option>
                           <option value="2">Emplacement 2</option>
                           <option value="3">Emplacement 3</option>
                    </select>
                  </div><!-- End emplacement -->

                 <div class="col-6">
                    <label for="inputNanme5" class="form-label">Nom espace</label>
                    <input type="text" class="form-control" id="inputNanme5" placeholder="Entrer sous categorie" required>
                </div> <!-- End espace -->

                  <div class="">
                     <button type="submit" class="btn btn-success">J'enregistre un espace</button>
                  </div><!-- End submit -->
              </form>
         </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection