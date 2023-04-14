@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Sous categorie</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Sous categorie</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
       <a href="{{route('scategories.create')}}"><button type="button" class="btn btn-outline-success btn-md m-2"><i class="bi bi-plus"></i> Ajouter sous categorie</button></a>
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des sous categories</h5>
             <!-- Bien table -->
              <table class="table table-hover ">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Categorie</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($scategories as $scategorie)
                      <tr>
                        <th scope="row">{{$scategorie->id}}</th>
                        <td>{{$scategorie->name}}</td>
                        <td>{{$scategorie->categorie->name}}</td>
                         <td>
                           <a href="{{route('scategories.show', [ 'scategorie' => $scategorie->id])}}"><button type="button" class="btn btn-outline-success btn-sm"><i class="bi bi-eye"></i> Voir details</button></a>
                       </td>
                      </tr>
                    @endforeach
                  </tbody>
          </table>
         </div>
           {{ $scategories->links() }}
      </div>
    </section>
</main><!-- End #main -->
@endsection