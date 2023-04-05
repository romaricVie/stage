@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Affectations</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Affectations</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
       <a href="{{route('affectations.create')}}"><button type="button" class="btn btn-outline-success btn-md m-2"><i class="bi bi-plus"></i> Enregistrer une affectation</button></a>
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des affectations</h5>
             <!-- Bien table -->
              <table class="table table-hover ">
                  <thead>
                    <tr>
                       <th scope="col">#</th>
                       <th scope="col">Nom employé</th>
                       <th scope="col">Nom du bien</th>
                       <th scope="col">Action</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($affectations as $affectation)
                      <tr>
                        <th scope="row">{{$affectation->id}}</th>
                        <td>{{$affectation->employe->name}}</td>
                        <td>{{$affectation->bien->name}}</td>
                        <td><a href=""><button type="button" class="btn btn-outline-success btn-sm"><i class="bi bi-eye"></i> Voir details</button></a></td>
                      </tr>
                    @endforeach
                  </tbody>
          </table>
         </div>
          {{ $affectations->links() }}
      </div>
    </section>

</main><!-- End #main -->
@endsection