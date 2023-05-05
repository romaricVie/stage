@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Sous categorie</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('scategories.index')}}">Home</a></li>
          <li class="breadcrumb-item active">{{$scategorie->name}}</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
       
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des biens de la sous categorie {{$scategorie->name}}</h5>
             <!-- Bien table -->
              <table class="table table-hover ">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Designation</th>
                      <th scope="col">Etat</th>
                      <th scope="col">Disponibilité</th>
                      <th scope="col">Entrepôts</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($scategorie->biens as $bien)
                      <tr>
                        <th scope="row">{{$bien->etiquette}}</th>
                        <td>{{$bien->name}}</td>
                        <td>{{$bien->etat}}</td>
                        <td>{{$bien->disponibilite}}</td>
                        <td>{{$bien->entrepot->name}}</td>
                      </tr>
                    @endforeach
                  </tbody>
          </table>
         </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection