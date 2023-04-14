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
                      <th scope="col">Nom du biens</th>
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
                        <td>{{$bien->etat}}</td>
                        <td>{{$bien->disponibilite}}</td>
                        <td>{{$bien->entrepot->name}}</td>
                      </tr>
                    @endforeach
                  </tbody>
          </table>

          <h5 class="card-title">Liste des employés de l'entité {{$entite->name}}</h5>
          <table class="table table-hover ">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Contact</th>
                      <th scope="col">Email</th>
                      <th scope="col">Statut</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($entite->employes as $employe)
                      <tr>
                        <th scope="row">{{$employe->id}}</th>
                        <td>{{$employe->name}}</td>
                        <td>{{$employe->contact}}</td>
                        <td>{{$employe->email}}</td>
                        <td>{{$employe->statut}}</td>
                      </tr>
                    @endforeach
                  </tbody>
          </table>
         </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection