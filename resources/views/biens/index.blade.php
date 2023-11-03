@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Biens</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('biens.index')}}">Home</a></li>
          <li class="breadcrumb-item active">Biens</li>
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
       <a href="{{route('biens.create')}}"><button type="button" class="btn btn-outline-success btn-md m-2"><i class="bi bi-plus"></i> Ajouter un bien</button></a>
       
       <!-- Filtre -->
        <div class="mb-2">
           <livewire:filter-pots/>
        </div>

        <!-- Table-->
        <div class="">
           <livewire:biens/> 
        </div>
    </section>

</main><!-- End #main -->
@endsection