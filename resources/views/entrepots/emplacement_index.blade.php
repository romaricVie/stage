@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Emplacements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Emplacements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
       <a href="{{route('emplacements.create')}}"><button type="button" class="btn btn-outline-success btn-md m-2"><i class="bi bi-plus"></i> Ajouter emplacement</button></a>
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des emplacements</h5>
             <!-- Bien table -->
              <table class="table table-hover ">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Entrepot</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($emplacements as $emplacement)
                      <tr>
                        <th scope="row">{{$emplacement->id}}</th>
                        <td>{{$emplacement->name}}</td>
                        <td>{{$emplacement->entrepot->name}}</td>
                      </tr>
                    @endforeach
                  </tbody>
          </table>
         </div>
          {{ $emplacements->links() }}
      </div>
    </section>
</main><!-- End #main -->
@endsection