@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Espace</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('espaces.index')}}">Home</a></li>
          <li class="breadcrumb-item active">{{$espace->name}}</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
       
      <div class="card">
         <div class="card-body">
            <h1 class="card-title">Liste des biens de l'espace {{$espace->name}}</h1>
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
                     @foreach($espace->biens as $bien)
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
         </div>
         <div class="d-flex justify-content-end m-4">
            <a class="btn btn-outline-primary" href="{{route('espaces.bien.pdf',$espace)}}"><i class="bi bi-printer-fill"></i> Imprimer</a>
        </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection