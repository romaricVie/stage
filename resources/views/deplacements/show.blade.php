@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Mouvement details </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('deplacements.index')}}">Home</a></li>
          <li class="breadcrumb-item active">Mouvement</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
       <form  

              action="{{route('deplacements.destroy',$deplacement)}}"
              method="POST"
              onsubmit ="return confirm('Etre vous sûr de vouloir supprimer cet mouvement ?');"
              class="d-inline" 
        >
        @csrf
        @method('delete')
           <button type="submit" class="btn btn-outline-danger btn-sm m-2"><i class="bi bi-write"></i>Supprimer</button>
      </form>
      
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Détail du mouvement</h5>
             <!-- Bien table -->
              <p>
                 <span class="fw-bold">Désignation:</span>
                     <a href="{{route('biens.show',['bien' => $deplacement->bien->id])}}">{{$deplacement->bien->name}}</a>
               </p>
              <p>
                 <span class="fw-bold">Identifiant:</span>
                   <span class="badge rounded-pill text-bg-success">{{$deplacement->bien->etiquette}}</span> 
              </p>
               <p>
                   <span class="fw-bold">Code:</span> {{$deplacement->bien->code}}
               </p>
               <p>
                 <span class="fw-bold">Entrepot:</span>
                    <a href="{{route('entrepots.show',['entrepot'=>$deplacement->entrepot->id])}}">{{$deplacement->entrepot->name}}</a>
               </p>
               <p>
                  <span class="fw-bold">Emplacement:</span> 
                    <a href="{{route('emplacements.show',['emplacement' => $deplacement->emplacement->id])}}">{{$deplacement->emplacement->name}}</a>
                </p>
               <p><span class="fw-bold">Espace:</span>
                  <a href="{{route('espaces.show',['espace'=>$deplacement->espace->id])}}">{{$deplacement->espace->name}}</a>
               </p>
               <p><span class="fw-bold">Entité :</span>
                     <a href="{{route('entites.show',['entite'=>$deplacement->entite->id])}}">{{$deplacement->entrepot->name}}
                 </a>
              </p>
              <p><span class="fw-bold">Motif deplacement:</span> {{$deplacement->motif_deplacement}}</p>
              <p><span class="fw-bold">Description:</span> {{$deplacement->description}}</p>
         </div>
      </div>
    </section>
</main><!-- End #main -->
@endsection