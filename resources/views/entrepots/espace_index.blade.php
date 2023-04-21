@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Espaces</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Espaces</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
       <a href="{{route('espaces.create')}}"><button type="button" class="btn btn-outline-success btn-md m-2"><i class="bi bi-plus"></i> Ajouter espace</button></a>

       <livewire:espaces/>  

    </section>
</main><!-- End #main -->
@endsection