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
              <form  class="row g-3">
                  <div class="col-6">
                      <label for="inputNanme4" class="form-label">Nom</label>
                      <input type="text" class="form-control" id="inputNanme4" placeholder="Entrer nom" required>
                  </div>
                  <div class="col-6">
                      <label for="inputNanme9" class="form-label">Prenoms</label>
                      <input type="text" class="form-control" id="inputNanme9" placeholder="Entrer prenoms" required>
                  </div>
                   <div class="col-6">
                      <label for="inputNanme7" class="form-label">Fonction</label>
                      <input type="text" class="form-control" id="inputNanme7" placeholder="Entrer la fonction" required>
                  </div>
                  <div class="col-6">
                      <label for="inputNanme6" class="form-label">Email</label>
                      <input type="email" class="form-control" id="inputNanme6" placeholder="Entrer email" required>
                  </div>

                  <div class="col-6">
                      <label for="inputNanme8" class="form-label">Contact</label>
                      <input type="text" class="form-control" id="inputNanme8" placeholder="Entrer contact" required>
                  </div>

                  <div class="">
                     <button type="submit" class="btn btn-success">J'enregistre un employé</button>
                  </div>
              </form>
         </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection