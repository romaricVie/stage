@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Bien affecté à un employé</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('employes.index')}}">Home</a></li>
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
                       <th scope="col">Désignation</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($employe->affectations as $affectation)
                      <tr>
                        <th scope="row">{{$affectation->bien->etiquette}}</th>
                        <td>{{$affectation->bien->name}}</td>
                      </tr>
                    @endforeach
                  </tbody>
          </table>
         </div>
         <div class="d-flex justify-content-end m-4">
            <a class="btn btn-outline-primary" href="{{route('employes.biens.pdf',$employe)}}"><i class="bi bi-printer-fill"></i> Imprimer</a>
        </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection