@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Espace</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Espace</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Enregistrer un espace</h5>
             <!-- Categorie Form -->
              <form  

                  class="row g-3"
                  method="POST"
                  action="{{route('espaces.store')}}" 

                 >
                  @csrf
                  <div class="col-6">
                      <label for="inputCategorie" class="form-label">Entrepôt</label>
                      <select name="entrepot_id" class="form-select form-select-sm" id="inputCategorie" aria-label=".form-select-sm example">
                           <option selected>Choisir un entrepot</option>
                           @foreach($entrepots as $entrepot)
                             <option value="{{$entrepot->id}}">{{$entrepot->name}}</option>
                           @endforeach
                         
                    </select>

                  </div><!-- End entrepot -->
                  <div class="col-6">
                    <label for="inputScategorie" class="form-label">Emplacement</label>
                     <select name="emplacement_id" class="form-select form-select-sm" id="inputScategorie" aria-label=".form-select-sm example">
                           <option selected>Choisir un emplacement</option>
                          @foreach($emplacements as $emplacement)
                           <option value="{{$emplacement->id}}">{{$emplacement->name}}</option>
                           @endforeach
                    </select>
                  </div><!-- End emplacement -->

                 <div class="col-6">
                    <label for="inputNanme5" class="form-label">Nom espace</label>
                    <input type="text" name="name" class="form-control" id="inputNanme5" placeholder="Entrer sous categorie" required>
                </div> <!-- End espace -->
                 <div class="col-6 form-floating">
                    <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                      <label for="floatingTextarea">description</label>
                </div>

                  <div class="">
                     <button type="submit" class="btn btn-success">J'enregistre un espace</button>
                  </div><!-- End submit -->
              </form>
         </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection