@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Mouvements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('deplacements.index')}}">Home</a></li>
          <li class="breadcrumb-item active">Mouvement</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
     </div><!-- End Page Title -->
    @if(session('success'))
                <script type="text/javascript">
                    swal("Félicitations!","{!! session('success') !!}","success",{
                        button:"OK"
                    })
               </script>
           @endif
    <section class="section dashboard">
       <a href="{{route('deplacements.create')}}"><button type="button" class="btn btn-outline-success btn-md m-2"><i class="bi bi-plus"></i> Enregistrer un mouvement</button></a>

          <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des mouvements</h5>
             
               <!-- affectation table -->
              <table class="table table-hover">
                  <thead>
                    <tr>
                       <th scope="col">#Identifiant</th>
                       <th scope="col">Code</th>
                       <th scope="col">Désignation</th>
                       <th scope="col">Entrepôt</th>
                       <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($deplacements as $deplacement)
                      <tr>
                        <th scope="row">{{$deplacement->bien->etiquette}}</th>
                         <td>{{$deplacement->bien->code}}</td>
                          <td>
                              <a href="{{route('biens.show',['bien'=>$deplacement->bien->id])}}">{{$deplacement->bien->name}}</a>
                            </td>
                            <td>
                              <a href="{{route('entrepots.show',['entrepot'=>$deplacement->entrepot->id])}}">{{$deplacement->entrepot->name}}</a>
                            </td>
                            <td>
                               <a href="{{route('deplacements.show', ['deplacement' => $deplacement->id])}}"><button type="button" class="btn btn-outline-success btn-sm"><i class="bi bi-eye"></i> Voir details</button></a>
                           </td>
                      </tr>
                    @endforeach
                  </tbody>
          </table>
           {{$deplacements->links()}}
         </div> 
    </section>

</main><!-- End #main -->
@endsection