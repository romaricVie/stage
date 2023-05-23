@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Affectations</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('affectations.index')}}">Home</a></li>
          <li class="breadcrumb-item active">Affectations</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
       <a href="{{route('affectations.create')}}"><button type="button" class="btn btn-outline-success btn-md m-2"><i class="bi bi-plus"></i> Enregistrer une affectation</button></a>

           <livewire:affectations/>  
    </section>

</main><!-- End #main -->
@endsection