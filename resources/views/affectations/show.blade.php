@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Affectation details </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('affectations.index')}}">Home</a></li>
          <li class="breadcrumb-item active">Affectations</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
       <form  

              action="{{route('affectations.destroy',$affectation)}}"
              method="POST"
              onsubmit ="return confirm('Etre vous sûr de vouloir supprimer cette affectation ?');"
              class="d-inline" 
        >
        @csrf
        @method('delete')
           <button type="submit" class="btn btn-outline-danger btn-sm m-2"><i class="bi bi-write"></i>Supprimer</button>
      </form>
      
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Détail de l'affectation</h5>
             <!-- Bien table -->
              <p><span class="fw-bold">Nom employé:</span> {{$affectation->employe->name}}</p>
              <p><span class="fw-bold">Contact employé:</span> {{$affectation->employe->contact}}</p>
              <p><span class="fw-bold">Email employé:</span> {{$affectation->employe->email}}</p>
               <p><span class="fw-bold">Entité :</span> {{$affectation->employe->entite->name}}</p>
              <p><span class="fw-bold">Etiquette du biens:</span><span class="badge rounded-pill text-bg-success">{{$affectation->bien->etiquette}}</span></p>
              <p><span class="fw-bold">Nom du biens:</span> {{$affectation->bien->name}}</p>
              <p><span class="fw-bold">Motif affectation:</span> {{$affectation->motif_affection}}</p>
              <p><span class="fw-bold">Description:</span> {{$affectation->description ?? 'Non-definie'}}</p>
         </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection