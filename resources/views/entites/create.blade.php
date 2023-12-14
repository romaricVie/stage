@extends('templates/master')
@section('content')

<main id="main" class="main">
    <div class="pagetitle">
      <h1>Entité</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('entites.index')}}">Home</a></li>
          <li class="breadcrumb-item active">Entité</li>
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
            <h5 class="card-title">Enregistrer une entité</h5>
             <!-- Categorie Form -->
              <form  

                 class="row g-3"
                 method="POST"
                 action="{{route('entites.store')}}" 
              > 
              @csrf
                
                  <div class="col-6">
                      <label for="inputNanme4" class="form-label">Pays</label>
                      <input type="text" name="pays" class="form-control" id="inputNanme4" placeholder="Entrer entité" required>
                  </div>  
                   <div class="col-6">
                      <label for="inputNanme04" class="form-label">Ville</label>
                      <input type="text" name="ville" class="form-control" id="inputNanme04" placeholder="Entrer entité" required>
                  </div>  
                   <div class="col-6">
                      <label for="inputNanme004" class="form-label">Nom entité(société)</label>
                      <input type="text" name="name" class="form-control" id="inputNanme004" placeholder="Entrer entité" required>
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