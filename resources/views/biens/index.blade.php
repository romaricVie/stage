@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Biens</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Biens</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
       <a href="{{route('biens.create')}}"><button type="button" class="btn btn-outline-success btn-md m-2"><i class="bi bi-plus"></i> Ajouter un bien</button></a>
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des biens ({{$biens->count()}})</h5>
             <!-- Bien table -->
              <table class="table table-hover ">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Date enregistrement</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($biens as $bien)
                      <tr>
                        <th scope="row">{{$bien->id}}</th>
                        <td>{{$bien->name}}</td>
                        <td>{{$bien->created_at}}</td>
                        <td>
                           <a href="{{route('biens.show', ['bien' => $bien->id])}}"><button type="button" class="btn btn-outline-success btn-sm"><i class="bi bi-eye"></i> Voir details</button></a>
                       </td>
                      </tr>
                     @endforeach
                  </tbody>
          </table>
         </div>
          {{ $biens->links() }}
      </div>
    </section>

</main><!-- End #main -->
@endsection