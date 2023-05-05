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
           <livewire:bien-create/> 
           <script language="JavaScript">
     
                function enregistre_ordinateur() {
                if (document.enregistrement_biens.scategorie_id.selectedIndex == 1)
                document.getElementById('form_ordinateur').style.visibility = 'visible';
                else
                document.getElementById('form_ordinateur').style.visibility = 'hidden';
                }
    </script>
    </section>
    
</main><!-- End #main -->
@endsection