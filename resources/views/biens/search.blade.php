@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Biens</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Biens</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->


     <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des biens disponibles</h5>
             <!-- Bien table -->
              <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#Identification</th>
                      <th scope="col">Désignation</th>
                      <th scope="col">Disponibilité</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($biens as $bien)
                      <tr>
                        <th scope="row"><span class="badge rounded-pill text-bg-primary">{{$bien->etiquette}}</span></th>
                        <td>{{$bien->name}}</td>
                        <td><span class="badge rounded-pill text-bg-<?= $bien->disponibilite== 'occupe' ? 'warning' : 'success'?>">{{$bien->disponibilite}}</span></td>
                      </tr>
                     @endforeach
                  </tbody>
          </table>
         </div>
      </div>
</main><!-- End #main -->
@endsection