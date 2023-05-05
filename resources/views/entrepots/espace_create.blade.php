@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Espace</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('espaces.index')}}">Home</a></li>
          <li class="breadcrumb-item active">Espace</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
          <livewire:espace-create/>  
    </section>

</main><!-- End #main -->
@endsection