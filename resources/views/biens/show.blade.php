@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Bien</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('biens.index')}}">Home</a></li>
          <li class="breadcrumb-item active">Bien</li>
          <li class="breadcrumb-item active">Ajouté par {{$bien->user->name.' '.$bien->user->firstname }}</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
             <!-- Bien detail -->
      
      <a href="{{route('biens.edit',['bien' => $bien->id])}}"><button type="button" class="btn btn-outline-success btn-sm m-2 d-inline"><i class="bi bi-write"></i>Modifier</button></a>
      <form  

              action="{{route('biens.destroy',$bien)}}"
              method="POST"
              onsubmit ="return confirm('Etre vous sur de vouloir supprimer ce bien?');"
              class="d-inline" 
        >
        @csrf
        @method('delete')
           <button type="submit" class="btn btn-outline-danger btn-sm m-2"><i class="bi bi-write"></i>Supprimer</button></a>
      </form>
      

      <div class="card">
         <div class="card-body">
             <!-- Bien table -->
             @if($bien->image)
              <h5 class="card-title">image du bien</h5>
                 <img src="{{asset('storage/'.$bien->image)}}" alt="img" title="image" class="img-fluid" style="width:450px; height:450px"  >
              @endif
              <h5 class="card-title">Informations sur le bien</h5>
              <div>
                  <span class="fw-bold">Nom :</span> {{$bien->name }}<br>
                  <span class="fw-bold">Etiquette :</span> <span class="badge rounded-pill text-bg-primary">{{$bien->etiquette}}</span><br>
                  <span class="fw-bold">Marque :</span> {{$bien->marque  ?? 'non-defini'}}<br>
                  <span class="fw-bold">Prix :</span> {{$bien->price ?? 'non-defini'}}<br>
                  <span class="fw-bold">couleur :</span> {{$bien->couleur ?? 'non-definie'}}<br>
                  <span class="fw-bold">Disponibilité :</span> <span class="badge rounded-pill text-bg-<?= $bien->disponibilite== 'occupe' ? 'warning' : 'success'?>">{{$bien->disponibilite}}</span> <br>
                  <span class="fw-bold">Etat :</span>
                          <span class="badge rounded-pill text-bg-<?= $bien->etat== 'bon' ? 'info' : 'danger'?>"> {{$bien->etat}}</span><br>
                  <span class="fw-bold">Achat :</span> {{$bien->day}}/{{$bien->month}}/{{$bien->year}}<br>
                  <span class="fw-bold">Affecté à :</span>
                        @if($bien->affectations->count()>0)
                            <ol>
                             @foreach($bien->affectations as $affectation)
                                <li><a href="{{route('employes.show', ['employe' => $affectation->employe->id])}}"> {{$affectation->employe->name}} {{$affectation->employe->firstname}}</a></li>
                              @endforeach 
                            </ol>
                               @else
                                 <span>Pas encors affecteté</span><br>
                              @endif
                  <span class="fw-bold">Code :</span> {{$bien->code ?? 'non-defini'}}<br>
                  <span class="fw-bold">Categorie :</span> 
                    <a href="{{route('categories.show',['categorie'=>$bien->categorie->id])}}">
                        {{$bien->categorie->name}}</a><br>
                  <span class="fw-bold">Sous Categorie :</span>
                     <a href="{{route('scategories.show',['scategorie'=>$bien->scategorie->id])}}">
                     {{$bien->scategorie->name}}</a><br>
                  <span class="fw-bold">Sous sous categorie :</span> 
                     @if($bien->sscategorie->name)
                        <a href="{{route('sscategories.show',['sscategorie'=>$bien->sscategorie->id])}}">{{$bien->sscategorie->name}}</a><br>
                      @endif
                  <span class="fw-bold">disque_dur :</span> {{$bien->disque_dur ?? 'non-defini'}}<br>
                  <span class="fw-bold">processeur :</span> {{$bien->processeur ?? 'non-defini'}}<br>
                  <span class="fw-bold">Ram :</span> {{$bien->ram ?? 'non-definie'}}<br>
                  <span class="fw-bold">Generation :</span> {{$bien->generation ?? 'non-defini'}}<br>
                  <span class="fw-bold">Longeur :</span> {{$bien->longueur ?? 'non-definie'}}<br>
                  <span class="fw-bold">Largeur :</span> {{$bien->largeur ?? 'non-definie'}}<br>
                  <span class="fw-bold">Hauteur :</span> {{$bien->hauteur ?? 'non-definie'}}<br>
                   @if($bien->nbre_battant)
                      <span class="fw-bold">Nombre de battants :</span> {{$bien->nbre_battant}}<br>
                  @endif
                  <span class="fw-bold">poids :</span> {{$bien->poids ?? 'non-defini'}}<br>
                  <span class="fw-bold">immatriculation :</span> {{$bien->immatriculation ?? 'non-defini'}}<br>
                  @if($bien->entrepot)
                    <span class="fw-bold">Entrepots:</span>
                      <a href="{{route('entrepots.show',['entrepot'=>$bien->entrepot->id])}}">{{$bien->entrepot->name}}</a><br>
                    @else
                     <span>non-defini</span><br>
                  @endif
                 <span class="fw-bold">Emplacement :</span>
                    @if($bien->emplacement)
                      <a href="{{route('emplacements.show',['emplacement' => $bien->emplacement->id])}}">{{$bien->emplacement->name}}</a><br>
                  @else
                     <span>non-defini</span><br>
                  @endif
                  <span class="fw-bold">Espace :</span> 
                  @if($bien->espace)
                          <a href="{{route('espaces.show',['espace'=>$bien->espace->id])}}">{{$bien->espace->name}}</a><br>
                   @else
                    <span>non-defini</span><br>
                   @endif

                  <span class="fw-bold">Entité :</span> 
                   @if($bien->entite)
                       <a href="{{route('entites.show',['entite'=>$bien->entite->id])}}">{{$bien->entite->name}}</a><br>
                   @else
                     <span>non-defini</span><br>
                   @endif
                   @if($bien->puissance)
                      <span class="fw-bold">Puissance :</span> {{$bien->puissance}}<br>
                   @endif
                   @if($bien->matiere)
                      <span class="fw-bold">matiere :</span> {{$bien->matiere }}<br>
                  @endif
                    @if($bien->place)
                      <span class="fw-bold">Places assises :</span> {{$bien->place}}<br>
                  @endif
                    @if($bien->energie)
                     <span class="fw-bold">Energie :</span> {{$bien->energie}}<br>
                    @endif

                  <span class="fw-bold">Quantité :</span> {{$bien->quantite ?? 'non-definie'}}<br>

                 @if($bien->expiration)
                     <span class="fw-bold">Date d'expiration :</span> {{$bien->expiration}}<br>
                  @endif
                   <span class="fw-bold">Nom fournisseur :</span> {{$bien->fournisseur_name ?? 'non-defini'}}<br>
                   <span class="fw-bold">Contact fournisseur :</span> {{$bien->fournisseur_tel ?? 'non-defini'}}<br>
                   @if($bien->autres)
                     <span class="fw-bold">autres :</span> {{$bien->autres ?? 'non-defini'}}<br>
                  @endif
                  <span class="fw-bold">Enregistré le :</span> {{$bien->created_at}}<br>
              </div>  
         </div>
      </div>
      <!-- QR-Code -->
       <div class="col-xl-4">
            <div class="card">
              <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">
                {{ QrCode::format('svg')->size(200)->generate($bien->entrepot->name.' - '.$bien->emplacement->name.' - '.$bien->espace->name." Id: ".$bien->etiquette) }}
              </div>
            </div>
          </div>


    </section>

</main><!-- End #main -->
@endsection