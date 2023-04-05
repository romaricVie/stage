@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Emplacement</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Emplacement</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Enregistrer un emplacement</h5>
             <!-- Categorie Form -->
              <form  class="row g-3">
                  <div class="col-6">
                      <label for="inputCategorie" class="form-label">Entrepots</label>
                      <select class="form-select form-select-sm" id="inputCategorie" aria-label=".form-select-sm example">
                           <option selected>Choisir un entrepot</option>
                           <option value="1">Voodoo</option>
                           <option value="2">CHU </option>
                           <option value="3">Abidjan mall</option>
                    </select>
                  </div><!-- End emplacement -->

                 <div class="col-6">
                    <label for="inputNanme4" class="form-label">Nom emplacement</label>
                    <input type="text" class="form-control" id="inputNanme4" placeholder="Entrer emplacement" required>
                </div> <!-- End emplacement -->

                  <div class="">
                     <button type="submit" class="btn btn-success">J'enregistre un emplacement</button>
                  </div><!-- End submit -->
              </form>
         </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection