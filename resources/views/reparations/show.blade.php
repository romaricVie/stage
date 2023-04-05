@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Réparations</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Réparations</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Details</h5>
             <!-- Bien table -->
              <div>
                  <span class="fw-bold">Nom maintenancier :</span>Paul<br>
                  <span class="fw-bold">Contact :</span>01020145<br>
                  <span class="fw-bold">Coût :</span>1500 000F<br>
                  <span class="fw-bold">Nom du bien :</span>Apple mac book<br>
                  <span class="fw-bold">Identifiant :</span>#1<br>
                  <span class="fw-bold">Etat :</span>Bon<br>
                  <span class="fw-bold">Date :</span>04/04/2023<br>
                  <span class="fw-bold">Description panne:</span><br>Augmentation de la memoire RAM
              </div>  
         </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection