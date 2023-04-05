@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Affectation</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Affectation</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Enregistrer une affection</h5>
             <!-- Categorie Form -->
              <form  class="row g-3">
                  <div class="col-6">
                      <label for="inputCategorie" class="form-label">Employé</label>
                      <select class="form-select form-select-sm" id="inputCategorie" aria-label=".form-select-sm example">
                           <option selected>Choisir un employé</option>
                           <option value="1">Romaric</option>
                           <option value="2">Dadie</option>
                           <option value="3">Franck</option>
                    </select>
                  </div><!-- End Employe -->

                   <div class="col-6">
                      <label for="inputBien" class="form-label">Biens</label>
                      <select class="form-select form-select-sm" id="inputBien" aria-label=".form-select-sm example">
                           <option selected>Choisir un biens</option>
                           <option value="1">PC</option>
                           <option value="2">Imprimante</option>
                           <option value="3">Climatisseur</option>
                    </select>
                  </div><!-- End Employe -->

                 <div class="col-6">
                    <label for="inputNanme4" class="form-label">Motif affection</label>
                    <input type="text" class="form-control" id="inputNanme4" placeholder="Entrer le motif" required>
                </div> <!-- End sous categorie -->
                 <div class="col-6 form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                  <label for="floatingTextarea">Description</label>
                </div><!--End description --> 

                  <div class="">
                     <button type="submit" class="btn btn-success">Enregistrer affectation</button>
                  </div><!-- End submit -->
              </form>
         </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection