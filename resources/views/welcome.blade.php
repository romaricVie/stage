@extends('templates/master')
@section('content')

<section>
 
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('dashboard')}}">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <h1>Statistiques</h1>
        
        <div class="row"> <!-- first lign  -->
          <div class="col-xxl-4 col-md-4">
              <div class="card text-bg-warning info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Biens</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-gem"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$biens->count()}}</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Informatiques</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-laptop"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$informatiques}}</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
             <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Mobiliers</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-door-open"></i>
                    </div>
                    <div class="ps-3">
                         <h6>{{$mobiliers}}</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div>
        </div><!-- end first lign  -->

          <div class="row"> <!-- second lign  -->
          <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Vehicules</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-car-front-fill"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$vehicules}}</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Goodies</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-handbag"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$goodies}}</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
             <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">            
                <div class="card-body">
                  <h5 class="card-title">Electromenagers</h5>
                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-tv"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$electromenagers}}</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div><!-- end_second lign  -->
          <div class="row"> <!-- fird lign  -->
          <div class="col-xxl-4 col-md-4">
              <div class="card text-bg-primary info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Employés</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-person"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$employes->count()}}</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Hommes</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-gender-male"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$males}}</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
             <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">


                <div class="card-body">
                  <h5 class="card-title">Femmes</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-gender-female"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$females}}</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div> <!-- en_fird lign  -->

          <div class="row"> <!-- forth lign  -->
          <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Entrepôts</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-house-door"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$entrepots}}</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Emplacements</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-building"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$emplacements}}</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
             <div class="col-xxl-4 col-md-4">
              <div class="card info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Espaces</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-distribute-vertical"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$espaces}}</h6>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>

          <div class="row"> <!-- six lign  -->
          <div class="col-xxl-4 col-md-4">
              <div class="card text-bg-danger info-card sales-card">

                <div class="card-body">
                  <h5 class="card-title">Hors service</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-archive"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$etat}}</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xxl-4 col-md-4"><!--Tab-->
              <div class="card text-bg-success info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Libre </h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-building"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$disponibilites}}</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div><!--End-Tab-->

              <div class="col-xxl-4 col-md-4"><!--Tab-->
              <div class="card info-card sales-card">
                <div class="card-body">
                  <h5 class="card-title">Mouvements</h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                       <i class="bi bi-arrows-move"></i>
                    </div>
                    <div class="ps-3">
                      <h6>{{$deplacements}}</h6>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div><!-- End six lign -->

        <livewire:search/> 
    </section>
  </main><!-- End #main -->


</section>
@endsection