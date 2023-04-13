@extends('templates/master')
@section('content')

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Entité</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Entité</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Enregistrer une entité</h5>
             <!-- Categorie Form -->
              <form  

                 class="row g-3"
                 method="POST"
                 action="{{route('entites.store')}}" 
              > 
              @csrf
              
                  <div class="col-6">
                      <label for="inputNanme4" class="form-label">Nom entité</label>
                      <input type="text" name="name" class="form-control" id="inputNanme4" placeholder="Entrer entité" required>
                  </div>            
                  <div class="">
                    <button type="submit" class="btn btn-success">J'enregistre une entité</button>
                  </div>
              </form>
         </div>
      </div>
    </section>
</main><!-- End #main -->
@endsection