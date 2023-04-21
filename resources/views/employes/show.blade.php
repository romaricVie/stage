@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Bien appartenant à un employé</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Employé</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
     
    <section class="section dashboard">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des biens affecté à {{$employe->name}}</h5>
             <!-- Bien table -->
              <table class="table table-hover ">
                  <thead>
                    <tr>
                       <th scope="col">#Indentifiant</th>
                       <th scope="col">Nom du bien</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($employe->affectations as $affectation)
                      <tr>
                        <th scope="row">{{$affectation->bien->id}}</th>
                        <td>{{$affectation->bien->name}}</td>
                      </tr>
                    @endforeach
                  </tbody>
          </table>
         </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection