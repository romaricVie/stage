@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Emplacement</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Emplacement</li>
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
            <h5 class="card-title">Enregistrer un emplacement</h5>
             <!-- Categorie Form -->
              <form  

                  class="row g-3"
                  method="POST"
                  action="{{route('emplacements.store')}}" 
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
                  </div><!-- End emplacement -->

                 <div class="col-6">
                    <label for="inputNanme4" class="form-label">Nom emplacement</label>
                    <input type="text" name="name" class="form-control" id="inputNanme4" placeholder="Entrer emplacement" required>
                </div> <!-- End emplacement -->

                 <div class="col-6 form-floating">
                    <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                      <label for="floatingTextarea">description</label>
                </div>

                  <div class="">
                     <button type="submit" class="btn btn-success">J'enregistre un emplacement</button>
                  </div><!-- End submit -->
              </form>
         </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection