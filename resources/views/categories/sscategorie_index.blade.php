@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Sous sous categorie</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Sous sous categorie</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
       <a href="{{route('sscategories.create')}}"><button type="button" class="btn btn-outline-success btn-md m-2"><i class="bi bi-plus"></i> Ajouter une sous sous categorie</button></a>
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des sous sous categories</h5>
             <!-- Bien table -->
              <table class="table table-hover ">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Categorie</th>
                       <th scope="col">sous categorie</th>
                    </tr>
                  </thead>
                  <tbody>
                   @foreach($sscategories as $sscategorie)
                      <tr>
                        <th scope="row">{{$sscategorie->id}}</th>
                        <td>{{$sscategorie->name}}</td>
                        <td>{{$sscategorie->categorie->name ?? 'none'}}</td>
                        <td>{{$sscategorie->scategorie->name}}</td>
                      </tr>
                   @endforeach
                  </tbody>
          </table>
         </div>
          {{ $sscategories->links() }}
      </div>
    </section>
</main><!-- End #main -->
@endsection