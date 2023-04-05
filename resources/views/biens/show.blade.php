@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Biens</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Biens</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
             <!-- Bien detail -->
         
      <a href="#"><button type="button" class="btn btn-outline-success btn-sm m-2"><i class="bi bi-write"></i>Modifier</button></a>

      <div class="card">
         <div class="card-body">
            <h5 class="card-title">image du biens</h5>
             <!-- Bien table -->
              <img src="{{asset('assets/img/pc.jpeg')}}" alt="img" title="image" class="img-fluid">
              <h5 class="card-title">Informations sur le biens</h5>
              <div>
                  <span class="fw-bold">Nom :</span>MacBook<br>
                  <span class="fw-bold">Marque :</span>apple<br>
                  <span class="fw-bold">Prix :</span>1500 000F<br>
                  <span class="fw-bold">Disponibilité :</span>Occupé<br>
                  <span class="fw-bold">Detenu par :</span>N'DRI romaric<br>
                  <span class="fw-bold">Entrepots :</span>Voodoo<br>
                  <span class="fw-bold">emplacement :</span>VCIS<br>
                  <span class="fw-bold">espace :</span>space 1<br>
                  <span class="fw-bold">Entité :</span>Technologie<br>
                  <span class="fw-bold">Categorie :</span>Informatique<br>
                  <span class="fw-bold">Sous Categorie :</span>Ordinateur<br>
                  <span class="fw-bold">Sous sous categorie :</span>PC<br>
                  <span class="fw-bold">disque_dur :</span>500GB<br>
                  <span class="fw-bold">processeur :</span>i7<br>
                  <span class="fw-bold">Generation :</span>11th<br>
                  <span class="fw-bold">couleur :</span>Gris<br>
                  <span class="fw-bold">immatriculation :</span>1021520<br>
                  <span class="fw-bold">Puissance :</span>11CV<br>
                  <span class="fw-bold">matiere :</span>RAS<br>
                  <span class="fw-bold">autres :</span>RAS<br>
              </div>  
         </div>
      </div>
      <!-- QR-Code -->
       <div class="col-xl-4">
            <div class="card">
              <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                <img src="{{asset('assets/img/qr-code.png')}}" alt="Profile" class="img-fluid ">
              </div>
            </div>
          </div>
    </section>

</main><!-- End #main -->
@endsection