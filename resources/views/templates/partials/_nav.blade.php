<!-- Navigation -->
<!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Voodoo pratrimoine</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->
      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link collapsed" href="/">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" href="{{route('employes.index')}}">
          <i class="bi bi-person"></i><span>Employés</span>
        </a>
      </li><!-- End employes Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>Categories</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('categories.index')}}" class="nav-link collapsed">
              <i class="bi bi-circle"></i><span>Categories</span>
            </a>
          </li>
          <li>
            <a href="{{route('scategories.index')}}" class="nav-link collapsed">
              <i class="bi bi-circle"></i><span>Sous Categorie</span>
            </a>
          </li>
          <li>
            <a href="{{route('sscategories.index')}}">
              <i class="bi bi-circle"></i><span>Sous sous Categorie</span>
            </a>
          </li>
        </ul>
      </li><!-- End Categorie Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('biens.index')}}">
          <i class="bi bi-gem"></i><span>Biens</span>
        </a>
      </li><!-- End Bien Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-building"></i><span>Entrepôts</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('entrepots.index')}}">
              <i class="bi bi-circle"></i><span>Entrepôts</span>
            </a>
          </li>
          <li>
            <a href="{{route('emplacements.index')}}">
              <i class="bi bi-circle"></i><span>Emplacements</span>
            </a>
          </li>
          <li>
            <a href="{{route('espaces.index')}}">
              <i class="bi bi-circle"></i><span>Espaces</span>
            </a>
          </li>
        </ul>
      </li><!-- End Entrepots Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed"  href="{{route('entites.index')}}">
         <i class="bi bi-diagram-3-fill"></i><span>Entités</span>
        </a>
      </li><!-- End Entité Nav -->

       <li class="nav-item">
        <a class="nav-link collapsed"  href="{{route('affectations.index')}}">
         <i class="bi bi-gift"></i><span>Affectations</span>
        </a>
      </li><!-- End Affectation Nav -->


       <li class="nav-item">
        <a class="nav-link collapsed"  href="{{route('reparations.index')}}">
          <i class="bi bi-check2-square"></i><span>Reparations</span>
        </a>
      </li><!-- End Reparation Nav -->

      <li class="nav-heading">Pages</li>
     
    <!-- End Contact Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-register.html">
          <i class="bi bi-card-list"></i>
          <span>Register</span>
        </a>
      </li><!-- End Register Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-login.html">
          <i class="bi bi-box-arrow-in-right"></i>
          <span>Login</span>
        </a>
      </li><!-- End Login Page Nav -->

      
     

    </ul>

  </aside><!-- End Sidebar-->