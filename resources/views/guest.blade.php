@extends('templates/guest')
@section('content')

<style type="text/css">
  
  #welcome{

  background-image: url('assets/img/hero-bg.jpg');
  height: 24rem;
  
}

#msg{

  margin: 0;
  font-size: 48px;
  font-weight: 700;
  line-height: 56px;
  color: #222222;
  font-family: "Poppins", sans-serif;

 
  
}

#slogan{

  color: #555555;
  margin: 5px 0 30px 0;
  font-size: 24px;
  font-weight: 400;

 
  
}

.patrimoine{

  color: #106eea;
  
}

</style>

<main>

  <div id="welcome" class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
     <section  class="d-flex align-items-center">
           <div class="container" data-aos="zoom-out" data-aos-delay="100">
            <h1 id ="msg"class="fs-1 fw-bold">Bienvenue sur le gestionnaire du <span class="patrimoine">Patrimoine</span></h1>
            <h2 id="slogan" class="text-center">Gérer le patrimoine de voodoo en un clic!</h2> 
              <div class="text-center">
                 <a href="{{route('login')}}"> <button class="btn btn-primary text-center">JE ME CONNECTE</button></a>
              </div>
                 
          </div>
  </section><!-- End Hero -->
  </div>
</main><!-- End #main -->


@endsection