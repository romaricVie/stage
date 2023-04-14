@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Categories</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Categories</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
       <a href="{{route('categories.create')}}"><button type="button" class="btn btn-outline-success btn-md m-2"><i class="bi bi-plus"></i> Ajouter Categorie</button></a>
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des categories</h5>
             <!-- Bien table -->
              <table class="table table-hover ">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($categories as $categorie)
                      <tr>
                        <th scope="row">{{$categorie->id}}</th>
                        <td>{{$categorie->name}}</td>
                        <td>
                           <a href="{{route('categories.show', [ 'categorie' => $categorie->id])}}"><button type="button" class="btn btn-outline-success btn-sm"><i class="bi bi-eye"></i> Voir details</button></a>
                       </td>
                      </tr>
                 @endforeach
                  </tbody>
          </table>

         </div>
          {{ $categories->links() }}
      </div>
    </section>

</main><!-- End #main -->
@endsection