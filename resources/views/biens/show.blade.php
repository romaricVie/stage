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
                  <span class="fw-bold">Nom :</span> {{$bien->name}}<br>
                  <span class="fw-bold">Etiquette :</span> {{$bien->etiquette}}<br>
                  <span class="fw-bold">Marque :</span> {{$bien->marque}}<br>
                  <span class="fw-bold">Prix :</span> {{$bien->price}}<br>
                  <span class="fw-bold">couleur :</span> {{$bien->couleur}}<br>
                  <span class="fw-bold">Disponibilité :</span> {{$bien->disponibilite}}<br>
                  <span class="fw-bold">Etat :</span> {{$bien->etat}}<br>
                  <span class="fw-bold">Achat :</span> {{$bien->day}}/{{$bien->month}}/{{$bien->year}}<br>
                 
                     <span class="fw-bold">Detenu par :</span>
                           <ul>
                             @foreach($bien->affectations as $affectation)
                                <li>{{$affectation->employe->name}} {{$affectation->employe->firstname}}</li>
                              @endforeach 
                           </ul>
                  <span class="fw-bold">Categorie :</span> {{$bien->categorie->name}}<br>
                  <span class="fw-bold">Sous Categorie :</span> {{$bien->scategorie->name}}<br>
                  <span class="fw-bold">Sous sous categorie :</span> {{$bien->sscategorie->name}}<br>
                  <span class="fw-bold">disque_dur :</span> {{$bien->disque_dur}}<br>
                  <span class="fw-bold">processeur :</span> {{$bien->processeur}}<br>
                  <span class="fw-bold">Ram :</span> {{$bien->ram}}<br>
                  <span class="fw-bold">Generation :</span> {{$bien->generation}}<br>

                  <span class="fw-bold">Longeur :</span> {{$bien->longueur}}<br>
                  <span class="fw-bold">Largeur :</span> {{$bien->largeur}}<br>
                  <span class="fw-bold">Hauteur :</span> {{$bien->hauteur}}<br>

                  <span class="fw-bold">Nombre de battants :</span> {{$bien->nbre_battant}}<br>
                  <span class="fw-bold">poids :</span> {{$bien->poids}}<br>
                  <span class="fw-bold">immatriculation :</span> {{$bien->immatriculation}}<br>

                  <span class="fw-bold">Entrepots :</span> {{$bien->entrepot->name}}<br>
                  <span class="fw-bold">emplacement :</span> {{$bien->emplacement->name}}<br>
                  <span class="fw-bold">espace :</span> {{$bien->espace->name}}<br>
                  <span class="fw-bold">Entité :</span> {{$bien->entite->name}}<br>
                  <span class="fw-bold">Puissance :</span> {{$bien->puissance}}<br>
                  <span class="fw-bold">matiere :</span> {{$bien->matiere}}<br>
                  <span class="fw-bold">autres :</span> {{$bien->autres}}<br>
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