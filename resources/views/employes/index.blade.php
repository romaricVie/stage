@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Liste employés</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Employé</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
       <a href="{{route('employes.create')}}"><button type="button" class="btn btn-outline-success btn-md m-2"><i class="bi bi-plus"></i> Ajouter employé</button></a>
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des categories({{$employes->count()}})</h5>
             <!-- Bien table -->
              <table class="table table-hover ">
                  <thead>
                    <tr>
                       <th scope="col">#</th>
                       <th scope="col">Nom</th>
                       <th scope="col">Prenoms</th>
                       <th scope="col">Fonction</th>
                       <th scope="col">Contacts</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($employes as $employe)
                      <tr>
                        <th scope="row">{{$employe->id}}</th>
                        <td>
                          <a href="{{route('employes.show', ['employe' => $employe->id])}}">{{$employe->name}}</a>
                        </td>
                        <td>{{$employe->firstname}}</td>
                        <td>{{$employe->fonction}}</td>
                        <td>{{$employe->contact}}</td>
                      </tr>
                    @endforeach
                  </tbody>
          </table>
         </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection