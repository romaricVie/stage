@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Sous categorie</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('scategories.index')}}">Home</a></li>
          <li class="breadcrumb-item active">Sous categories</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

          @if(session('success'))
              <script type="text/javascript">
                        swal("Félicitations!","{!! session('success') !!}","success",{
                            button:"OK"
                        })
              </script>
          @endif
    <section class="section dashboard">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Enregistrer une sous categorie</h5>
             <!-- Categorie Form -->
              <form  

                  class="row g-3"
                  method="POST"
                  action="{{route('scategories.store')}}" 

                >
                  @csrf
                  <div class="col-6">
                      <label for="inputCategorie" class="form-label">Categorie</label>
                      <select class="form-select form-select-sm" name="categorie_id"  id="inputCategorie" aria-label=".form-select-sm example" required>
                           <option value="">Choisir une categorie</option>
                           @foreach($categories as $categorie)
                             <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                           @endforeach
                    </select>
                  </div><!-- End categorie -->

                 <div class="col-6">
                    <label for="inputNanme4" class="form-label">Nom sous categorie</label>
                    <input type="text" name="name" class="form-control" id="inputNanme4" placeholder="Entrer sous categorie" required>
                </div> <!-- End sous categorie -->

                  <div class="">
                     <button type="submit" class="btn btn-success">J'enregistre une sous categorie</button>
                  </div><!-- End submit -->
              </form>
         </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection