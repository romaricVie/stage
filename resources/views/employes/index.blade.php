@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Liste employés</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('employes.index')}}">Home</a></li>
          <li class="breadcrumb-item active">Employé</li>
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
       <div>
           <a href="{{route('employes.create')}}"><button type="button" class="btn btn-outline-success btn-md m-2"><i class="bi bi-plus"></i> Ajouter employé</button></a>
       </div>

        <livewire:employe/> 

      
    </section>

</main><!-- End #main -->
@endsection