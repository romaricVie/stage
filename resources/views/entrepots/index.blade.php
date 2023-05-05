@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Entrepots</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Entrepôts</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
       <a href="{{route('entrepots.create')}}"><button type="button" class="btn btn-outline-success btn-md m-2"><i class="bi bi-plus"></i> Ajouter un entrepôt</button></a>
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des entrepots ({{$entrepots->count()}})</h5>
             <!-- Bien table -->
              <table class="table table-hover ">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Désignation entrepot </th>
                      <th scope="col">Adresse géographique</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                       @foreach ($entrepots as $entrepot)
                      <tr>
                        <th scope="row">{{$entrepot->id}}</th>
                        <td>{{$entrepot->name}}</td>
                        <td>{{$entrepot->adresse_geographique}}</td>
                        <td>
                           <a href="{{route('entrepots.show', ['entrepot' => $entrepot->id])}}"><button type="button" class="btn btn-outline-success btn-sm"><i class="bi bi-eye"></i> Voir details</button></a>
                       </td>
                      </tr>
                       @endforeach
                  </tbody>
          </table>
         </div>
           {{ $entrepots->links() }}
      </div>
    </section>
</main><!-- End #main -->
@endsection