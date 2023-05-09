@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Sous sous categorie</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Sous sous categories</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
       <!-- Alert Messages -->

              @if(session('success'))
                    <script type="text/javascript">
                        swal("Félicitations!","{!! session('success') !!}","success",{
                            button:"OK"
                        })
                   </script>
               @endif
         <livewire:sscategorie/>  
    </section>

</main><!-- End #main -->
@endsection