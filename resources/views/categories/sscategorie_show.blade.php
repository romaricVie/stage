@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Sous sous categorie</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('sscategories.index')}}">Home</a></li>
          <li class="breadcrumb-item active">{{$sscategorie->name}}</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
       
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des biens de la sous sous categorie {{$sscategorie->name}}</h5>
             <!-- Bien table -->
              <table class="table table-hover ">
                  <thead>
                    <tr>
                      <th scope="col">#Identifiant</th>
                      <th scope="col">Designation</th>
                      <th scope="col">Etat</th>
                      <th scope="col">Disponibilité</th>
                      <th scope="col">Entrepôts</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($sscategorie->biens as $bien)
                      <tr>
                        <th scope="row"><span class="badge rounded-pill text-bg-primary">{{$bien->etiquette}}</span></th>
                        <td> <a href="{{route('biens.show',['bien'=>$bien->id])}}">{{$bien->name}}</a></td>
                        <td>{{$bien->etat}}</td>
                        <td><span class="badge rounded-pill text-bg-<?= $bien->disponibilite=='occupe' ? 'warning' : 'success'?>"> {{$bien->disponibilite}}</span></td>
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