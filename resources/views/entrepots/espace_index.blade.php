@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Espaces</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Espaces</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
       <a href="{{route('espaces.create')}}"><button type="button" class="btn btn-outline-success btn-md m-2"><i class="bi bi-plus"></i> Ajouter espace</button></a>
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des espaces</h5>
             <!-- Bien table -->
              <table class="table table-hover ">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Entrepôt</th>
                      <th scope="col">Emplacement</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($espaces as $espace)
                      <tr>
                        <th scope="row">{{$espace->id}}</th>
                        <td>{{$espace->name}}</td>
                        <td>{{$espace->entrepot->name}}</td>
                        <td>{{$espace->emplacement->name}}</td>
                      </tr>
                    @endforeach
                  </tbody>
          </table>
         </div>
           {{ $espaces->links() }}
      </div>
    </section>
</main><!-- End #main -->
@endsection