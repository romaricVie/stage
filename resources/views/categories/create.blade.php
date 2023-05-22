@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Categories</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('categories.index')}}">Home</a></li>
          <li class="breadcrumb-item active">Categories</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

     <!-- Alert Messages -->
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
            <h5 class="card-title">Enregistrer une categorie</h5>
             <!-- Categorie Form -->
              <form  class="row g-3"
                  method="POST"
                  action="{{route('categories.store')}}" 

              >
               @csrf
                <div class="col-6">
                    <label for="inputNanme4" class="form-label">Nom categorie <span class="text-danger"> *</span></label>
                    <input type="text" name="name" class="form-control" id="inputNanme4" placeholder="Entrer la categorie" required>
                </div>            
                <div class="">
                  <button type="submit" class="btn btn-success">Enregistrer</button>
                </div>
              </form>
         </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection