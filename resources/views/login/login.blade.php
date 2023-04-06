@extends('templates/guest')
@section('content')

<section>
 
  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">Administrateur</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Connexion</h5>
                    <p class="text-center small">Entrez votre mail & mot de passe de connexion</p>
                  </div>

                  <form class="row g-3 needs-validation" 
                    method="POST" 
                    action="{{route('login')}}" 
                     novalidate
                     >

                      @csrf

                     <div class="col-12">
                      <label for="yourEmail" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="yourEmail" placeholder="Entrez votre adresse email" required>
                      <div class="invalid-feedback">Please enter a valid Email adddress!</div>
                    </div>


                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Mot de passe</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit">Je me connecte</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0">Vos n'avez pas de compte? <a href="{{route('register')}}">Créer un compte</a></p>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->


</section>
@endsection