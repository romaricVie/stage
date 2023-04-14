@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Réparations</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Réparations</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
       <a href="{{route('reparations.create')}}"><button type="button" class="btn btn-outline-success btn-md m-2"><i class="bi bi-plus"></i> Enregistrer une réparation</button></a>
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des reparations effectuées</h5>
             <!-- Bien table -->
              <table class="table table-hover ">
                  <thead>
                    <tr>
                       <th scope="col">#</th>
                       <th scope="col">Nom maintenancier</th>
                       <th scope="col">Nom du bien</th>
                       <th scope="col">Etat</th>
                       <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($reparations as $reparation)
                      <tr>
                        <th scope="row">{{$reparation->id}}</th>
                        <td>{{$reparation->maintenancier}} </td>
                        <td>(#{{$reparation->bien->id}}) {{$reparation->bien->name}}</td>
                        <td>{{$reparation->etat}}</td>
                        <td> <a href="{{route('reparations.show',['reparation'=> $reparation->id])}}"><button type="button" class="btn btn-outline-success btn-sm"><i class="bi bi-eye"></i> Voir details</button></a></td>
                      </tr>
                    @endforeach
                  </tbody>
          </table>
         </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection