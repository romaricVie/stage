@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Entrepôt</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
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
                    <label for="inputNanme4" class="form-label">Nom entrepôt</label>
                    <input type="text" name="name" class="form-control" id="inputNanme4" placeholder="Entrer entrepot" required>
                </div>
                <div class="col-6">
                    <label for="inputNanme5" class="form-label">Adresse géographique</label>
                    <input type="text" name="adresse_geographique" class="form-control" id="inputNanme5" placeholder="Entrer entrepot" required>
                </div>
                 <div class="col-6 form-floating">
                    <textarea class="form-control" name="description" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                      <label for="floatingTextarea">description</label>
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