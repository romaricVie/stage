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
                 <img src="{{asset('storage/'.$bien->image)}}" alt="img" title="image" class="img-fluid">
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
                                <li>{{$affectation->employe->name}} {{$affectation->employe->firstname}}</li>
                              @endforeach 
                            </ol>
                               @else
                                 <span>Pas encors affecteté</span><br>
                              @endif
                  <span class="fw-bold">Code :</span> {{$bien->code ?? 'non-definie'}}<br>
                  <span class="fw-bold">Categorie :</span> {{$bien->categorie->name}}<br>
                  <span class="fw-bold">Sous Categorie :</span> {{$bien->scategorie->name}}<br>
                  <span class="fw-bold">Sous sous categorie :</span> {{$bien->sscategorie->name ?? 'non defini'}}<br>
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
                  <span class="fw-bold">Entrepots :</span> {{$bien->entrepot->name ?? 'non-defini'}}<br>
                  <span class="fw-bold">Emplacement :</span> {{$bien->emplacement->name ?? 'non-defini'}}<br>
                  <span class="fw-bold">Espace :</span> {{$bien->espace->name ?? 'non-defini'}}<br>
                  <span class="fw-bold">Entité :</span> {{$bien->entite->name ?? 'non-defini'}}<br>
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
                   @if($bien->autre)
                     <span class="fw-bold">autres :</span> {{$bien->autres ?? 'non-defini'}}<br>
                  @endif
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