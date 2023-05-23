@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Bienvenue sur la page d'dministration</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
          <li class="breadcrumb-item active">Biens</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">
      
        <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des biens enregistrés par {{$user->name}}</h5>
             <!-- Bien table -->
              <table class="table table-hover ">
                  <thead>
                    <tr>
                       <th scope="col">#Indentifiant</th>
                       <th scope="col">Désignation</th>
                       <th scope="col">Date d'enrégistrement</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($user->biens as $bien)
                      <tr>
                        <th scope="row"><span class="badge rounded-pill text-bg-primary">{{$bien->etiquette}}</span></th>
                        <td>{{$bien->name}}</td>
                        <td>{{$bien->created_at->format('d/m/Y H:i')}}</td>
                      </tr>
                    @endforeach
                  </tbody>
          </table>
         </div>
      </div>
       
        
    </section>
</main><!-- End #main -->
@endsection