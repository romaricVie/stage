@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Réparations détails</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('reparations.index')}}">Home</a></li>
          <li class="breadcrumb-item active">Réparations</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <form  

              action="{{route('reparations.destroy',$reparation)}}"
              method="POST"
              onsubmit ="return confirm('Etre vous sûr de vouloir supprimer cette reparation ?');"
              class="d-inline" 
        >
        @csrf
        @method('delete')
           <button type="submit" class="btn btn-outline-danger btn-sm m-2"><i class="bi bi-write"></i>Supprimer</button>
      </form>
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Informations sur la réparation</h5>
             <!-- Bien table -->
              <div>
                  <p><span class="fw-bold">Nom du maintenancier :</span> {{$reparation->maintenancier}}</p>
                  <p><span class="fw-bold">Contact maintenancier :</span> {{$reparation->contact_maintenancier}}</p>
                  <p><span class="fw-bold">Coût :</span> {{$reparation->price}} FCFA</p>
                  <p><span class="fw-bold">Nom du bien :</span> {{$reparation->bien->name}}</p>
                  <p><span class="fw-bold">Identifiant :</span> {{$reparation->bien->etiquette}}</p>
                  <p><span class="fw-bold">Emplacement :</span> {{$reparation->bien->emplacement->name}}</p>
                  <p><span class="fw-bold">Espace :</span> {{$reparation->bien->espace->name}}</p>
                  <p><span class="fw-bold">Etat :</span> {{$reparation->etat}}</p>
                  <p><span class="fw-bold">Date :</span> {{$reparation->day}}/{{$reparation->month}}/{{$reparation->year}}<p>
                  <p><span class="fw-bold">Description panne:</span> {{$reparation->description_panne}}<p>
              </div>  
         </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection

