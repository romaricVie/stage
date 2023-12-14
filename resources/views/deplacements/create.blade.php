 @extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Mouvement</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('deplacements.index')}}">Home</a></li>
          <li class="breadcrumb-item active">Mouvement</li>
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
           <livewire:deplacements/>     
      </div>
    </section>

</main><!-- End #main -->
@endsection