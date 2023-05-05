@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Emplacement</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">{{$emplacement->name}}</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
       
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des biens de l'emplacement {{$emplacement->name}}</h5>
             <!-- Bien table -->
              <table class="table table-hover ">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Désignation</th>
                      <th scope="col">Etat</th>
                      <th scope="col">Disponibilité</th>
                      <th scope="col">Categorie</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($emplacement->biens as $bien)
                      <tr>
                        <th scope="row">{{$bien->etiquette}}</th>
                        <td>{{$bien->name}}</td>
                        <td>{{$bien->etat}}</td>
                        <td>{{$bien->disponibilite}}</td>
                        <td>{{$bien->categorie->name}}</td>
                      </tr>
                    @endforeach
                  </tbody>
          </table>
         </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection