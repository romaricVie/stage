@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Entrepôt</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('entrepots.index')}}">Home</a></li>
          <li class="breadcrumb-item active">{{$entrepot->name}}</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
       
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des biens de l'entrepôt {{$entrepot->name}} ({{$entrepot->biens->count()}})</h5>
             <!-- Bien table -->
              <table class="table table-hover ">
                  <thead>
                    <tr>
                      <th scope="col">#Identifiant</th>
                      <th scope="col">Code</th>
                      <th scope="col">Désignation</th>
                      <th scope="col">Etat</th>
                      <th scope="col">Disponibilité</th>
                      <th scope="col">Categorie</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($entrepot->biens as $bien)
                      <tr>
                        <th scope="row"><span class="badge rounded-pill text-bg-primary">{{$bien->etiquette}}</span></th>
                        <td>{{$bien->code}}</td>
                        <td><a href="{{route('biens.show',['bien'=>$bien->id])}}">{{$bien->name}}</a></td>
                        <td>{{$bien->etat}}</td>
                        <td><span class="badge rounded-pill text-bg-<?= $bien->disponibilite== 'occupe' ? 'warning' : 'success'?>">{{$bien->disponibilite}}</span></td>
                        <td>{{$bien->categorie->name}}</td>
                      </tr>
                    @endforeach
                  </tbody>
          </table>
            <div class="d-flex justify-content-end m-4">
                <a class="btn btn-outline-primary" href="{{route('entrepots.biens.pdf',$entrepot)}}"><i class="bi bi-printer-fill"></i> Imprimer</a>
           </div>
           <h5 class="card-title">Informations de l'entrepot {{$entrepot->name}}</h5>
           <!-- Bien table -->
              <div>
                  <p><span class="fw-bold">Pays :</span> {{$entrepot->pays ?? 'Non defini'}}</p>
                   <p><span class="fw-bold">Pays :</span> {{$entrepot->ville ?? 'Non defini'}}</p>
                  <p><span class="fw-bold">Adresse geographique :</span> {{$entrepot->adresse_geographique}}</p>
                  <p><span class="fw-bold">batiment :</span> {{$entrepot->batiment ?? 'Non defini'}}</p>
                  <p><span class="fw-bold">Nom étage :</span> {{$entrepot->etage ?? 'Non defini'}}</p>
                  <p><span class="fw-bold">Nombre Piece :</span> {{$entrepot->piece ?? 'Non defini'}}</p>
                  <p><span class="fw-bold">Superficie :</span> {{$entrepot->superficie ?? 'Non defini'}}</p>
                  <p><span class="fw-bold">Nombre de parking :</span> {{$entrepot->parking ?? 'Non defini'}}</p>
                  <p><span class="fw-bold">Description :</span> {{$entrepot->description ?? 'Non defini'}}<p>
                 
              </div>  
        </div>

      </div>
    </section>

</main><!-- End #main -->
@endsection