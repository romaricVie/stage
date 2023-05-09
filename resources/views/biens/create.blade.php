@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Formulaire d'enregistrement</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('biens.index')}}">Home</a></li>
          <li class="breadcrumb-item active">Biens</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

     <section class="section dashboard">

          @if(session('success'))
                <script type="text/javascript">
                    swal("Félicitations!","{!! session('success') !!}","success",{
                        button:"OK"
                    })
               </script>
           @endif
           <livewire:bien-create/> 
    </section>
    
</main><!-- End #main -->
@endsection