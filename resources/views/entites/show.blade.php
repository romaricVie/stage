@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Entité</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">{{$entite->name}}</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
       
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des biens de l'entité {{$entite->name}}</h5>
             <!-- Bien table -->
              <table class="table table-hover ">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Désignation</th>
                      <th scope="col">Etat</th>
                      <th scope="col">Disponibilité</th>
                      <th scope="col">Entrepôts</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($entite->biens as $bien)
                      <tr>
                        <th scope="row">{{$bien->id}}</th>
                        <td>{{$bien->name}}</td>
                        <td><span class="badge rounded-pill text-bg-<?= $bien->etat== 'bon' ? 'info' : 'danger'?>"> {{$bien->etat}}</span></td>
                        <td> <span class="badge rounded-pill text-bg-<?= $bien->disponibilite== 'occupe' ? 'warning' : 'success'?>">{{$bien->disponibilite}}</span></td>
                        <td>{{$bien->entrepot->name}}</td>
                      </tr>
                    @endforeach
                  </tbody>
          </table> 
    </section>

</main><!-- End #main -->
@endsection