@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Emplacements</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/">Home</a></li>
          <li class="breadcrumb-item active">Emplacements</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
       <a href="{{route('emplacements.create')}}"><button type="button" class="btn btn-outline-success btn-md m-2"><i class="bi bi-plus"></i> Ajouter emplacement</button></a>
          
           <livewire:emplacements/>  

    </section>
</main><!-- End #main -->
@endsection