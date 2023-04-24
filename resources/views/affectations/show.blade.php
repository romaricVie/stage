@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Affectation details </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Affectations</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Détail de l'affectation</h5>
             <!-- Bien table -->
              <p><span class="fw-bold">Nom employé:</span> {{$affectation->employe->name}}</p>
              <p><span class="fw-bold">Contact employé:</span> {{$affectation->employe->contact}}</p>
              <p><span class="fw-bold">Email employé:</span> {{$affectation->employe->email}}</p>
               <p><span class="fw-bold">Entité :</span> {{$affectation->employe->entite->name}}</p>
              <p><span class="fw-bold">Identifiant du biens:</span> {{$affectation->bien->etiquette}}</p>
              <p><span class="fw-bold">Nom du biens:</span> {{$affectation->bien->name}}</p>
              <p><span class="fw-bold">Motif affectation:</span> {{$affectation->motif_affection}}</p>
              <p><span class="fw-bold">Description:</span> {{$affectation->description}}</p>
         </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection