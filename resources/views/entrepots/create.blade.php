@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Entrepôt</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('entrepots.index')}}">Home</a></li>
          <li class="breadcrumb-item active">Entrepôt</li>
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
            <h5 class="card-title">Enregistrer un entrepot</h5>
             <!-- Entrepot Form -->
              <form 

                  class="row g-3"
                  method="POST"
                  action="{{route('entrepots.store')}}" 

                  >
                   @csrf
                <div class="col-6">
                    <label for="inputNanme4" class="form-label">Nom entrepôt<span class="text-danger"> *</span></label>
                    <input 
                         type="text" 
                         name="name" 
                         class="form-control @error('name') is-invalid @enderror" 
                         id="inputNanme4" 
                         placeholder="Entrer entrepot" required>

                  @error('name')
                          <div class="alert alert-danger">{{ $message }}</div>
                  @enderror   
                </div>

                <div class="col-6">
                    <label for="inputNanme5" class="form-label">Adresse géographique <span class="text-danger"> *</span></label>
                    <input 
                          type="text" 
                          name="adresse_geographique"
                          class="form-control @error('adresse_geographique') is-invalid @enderror" 
                          id="inputNanme5" 
                          placeholder="Entrer localisation" required>

                  @error('adresse_geographique')
                          <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                 <div class="col-4">
                    <label for="batiment" class="form-label">Nombre de bâtiment <span class="text-danger"> *</span></label>
                    <input 
                          type="text" 
                          name="batiment"
                          class="form-control @error('batiment') is-invalid @enderror" 
                          id="batiment" 
                          placeholder="Entrer nembre de batiment" required>

                  @error('batiment')
                          <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                 <div class="col-4">
                    <label for="superficie" class="form-label">Superficie</label>
                    <input 
                          type="text" 
                          name="superficie"
                          class="form-control @error('superficie') is-invalid @enderror" 
                          id="superficie" 
                          placeholder="Entrer Superficie" required>

                  @error('superficie')
                          <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>
                 <div class="col-4">
                    <label for="etage" class="form-label">Nombre d'étage</label>
                    <input 
                          type="text" 
                          name="etage"
                          class="form-control @error('etage') is-invalid @enderror" 
                          id="etage" 
                          placeholder="Entrer nombre d'étage">

                  @error('etage')
                          <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>

                 <div class="col-4">
                    <label for="piece" class="form-label">Nombre de pièce</label>
                    <input 
                          type="text" 
                          name="piece"
                          class="form-control @error('piece') is-invalid @enderror" 
                          id="piece" 
                          placeholder="Entrer nombre de piece">

                  @error('piece')
                          <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>

                 <div class="col-4">
                    <label for="parking" class="form-label">Nombre de parking</label>
                    <input 
                          type="text" 
                          name="parking"
                          class="form-control @error('parking') is-invalid @enderror" 
                          id="parking" 
                          placeholder="Entrer nombre de parking">

                  @error('parking')
                          <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                </div>


                 <div class="col-6 form-floating">
                    <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                      <label for="floatingTextarea">Autre description</label>
                </div>

                <div class="">
                  <button type="submit" class="btn btn-success">J'enregistre un entrepot</button>
                </div>
              </form>
         </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection