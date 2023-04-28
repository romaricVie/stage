@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Informations sur employé</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Informations</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <div>
         <a href="{{route('employes.edit',['employe' => $employe->id])}}"><button type="button" class="btn btn-outline-success btn-md m-2 d-inline "><i class="bi bi-edit"></i> Modifier employé</button></a>
        <form  

              action="{{route('employes.destroy',$employe)}}"
              method="POST"
              onsubmit ="return confirm('Etre vous sûr de vouloir supprimer cet employé ?');"
              class="d-inline" 
        >
        @csrf
        @method('delete')
           <button type="submit" class="btn btn-outline-danger btn-md m-2"><i class="bi bi-write"></i>Supprimer</button>
      </form>

      </div>
    <section class="section dashboard">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Informations de {{$employe->name}}</h5>
             <!-- Bien table -->
              <div>
                  <p><span class="fw-bold">Nom :</span> {{$employe->name}}</p>
                  <p><span class="fw-bold">Prénoms :</span> {{$employe->firstname}}</p>
                  <p><span class="fw-bold">Fonction :</span> {{$employe->fonction}}</p>
                  <p><span class="fw-bold">Entité :</span> {{$employe->entite->name}}</p>
                  <p><span class="fw-bold">Email :</span> {{$employe->email}}</p>
                  <p><span class="fw-bold">Contact :</span> {{$employe->contact}}</p>
                  <p><span class="fw-bold">Numéro flotte :</span> {{$employe->flotte}}<p>
                  <p><span class="fw-bold">Ligne fixe:</span> {{$employe->fixe}}<p>
                  <p><span class="fw-bold">Statut:</span> {{$employe->statut}}<p>
                  <p><span class="fw-bold">Type de contrat:</span> {{$employe->contrat}}<p>
                  <p><span class="fw-bold">Autres informations:</span> {{$employe->autres}}<p>
              </div>  
         </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection