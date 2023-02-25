@extends('client-layouts.client')
@section('header')
<div id="top-bar" class="top-bar">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <ul class="top-info text-center text-md-left">
                    <li><i class="fas fa-map-marker-alt"></i>
                        <p class="info-text">Kinshasa, kin 94126, RDC</p>
                    </li>
                </ul>
            </div>
            <!--/ Top info end -->

            <div class="col-lg-4 col-md-4 top-social text-center text-md-right">
                <ul class="list-unstyled">
                    <li>
                        <a title="Facebook" href="#">
                            <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                        </a>
                        <a title="Twitter" href="#">
                            <span class="social-icon"><i class="fab fa-twitter"></i></span>
                        </a>
                        <a title="Instagram" href="#">
                            <span class="social-icon"><i class="fab fa-instagram"></i></span>
                        </a>
                        <a title="Linkdin" href="#">
                            <span class="social-icon"><i class="fab fa-github"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
            <!--/ Top social end -->
        </div>
        <!--/ Content row end -->
    </div>
    <!--/ Container end -->
</div>
<header id="header" class="header-two">
    <div class="site-navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">

                        <div class="logo">
                            <a class="d-block" href="{{ url('/') }}">
                                <img loading="lazy" src="{{ asset('front-end/images/logo1.png') }}"
                                    alt="Congo Drone Service">
                            </a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div id="navbar-collapse" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav ml-auto align-items-center">
                                <li><a href="{{ url('/') }}">Home </a></li>
                                <li class="nav-item dropdown">
                                    <a href="{{ url('/service') }}" class="nav-link dropdown-toggle"
                                        data-toggle="dropdown">Services
                                        <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">

                                        <li><a href="{{ url('/service') }}">Toutes les Services</a></li>

                                        @foreach ($services as $item)
                                            <li><a href="{{ url('/service') }}">{{ $item->service_name }}
                                                </a></li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle"
                                        data-toggle="dropdown">L'Entreprise <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/about') }}">A propos de nous</a></li>
                                        <li><a href="{{ url('/team') }}">Notre Equipe</a></li>
                                        <li><a href="{{ url('/temoignage') }}">Temoignage</a></li>
                                        <li><a href="{{ url('/faq') }}">Faq</a></li>
                                        <li><a href="{{ url('/project') }}">Projets</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">News <i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{ url('/news') }}">News </a></li>
                                        <li><a href="#">Future</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{ url('/contact') }}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
@endsection

@section('content')

    @include('includes.banners.banner-project')

    <section id="main-container" class="main-container">
        <div class="container">
      
          <div class="row">
            <div class="col-lg-8">
              <div id="page-slider" class="page-slider small-bg">
                <div class="item">
                  <img loading="lazy" class="img-fluid" src="{{ asset('front-end/images/projects/project1.jpg') }}" alt="project-image" />
                </div>
      
                <div class="item">
                  <img loading="lazy" class="img-fluid" src="{{ asset('front-end/images/projects/project4.jpg') }}" alt="project-image" />
                </div>
              </div>
            </div>
      
            <div class="col-lg-4 mt-5 mt-lg-0">
      
              <h3 class="column-title mrt-0">{{ $projectOne->project_name }}</h3>
              <p>{{ $projectOne->project_description }}</p>
      
              <ul class="project-info list-unstyled">
                <li>
                  <p class="project-info-label">Client</p>
                  <p class="project-info-content">Pransbay Powers Authority</p>
                </li>
                <li>
                  <p class="project-info-label">Architect</p>
                  <p class="project-info-content">Dlarke Pelli Incorp</p>
                </li>
                <li>
                  <p class="project-info-label">Location</p>
                  <p class="project-info-content">McLean, VA</p>
                </li>
                <li>
                  <p class="project-info-label">Size</p>
                  <p class="project-info-content">65,000 SF</p>
                </li>
                <li>
                  <p class="project-info-label">Year Completed</p>
                  <p class="project-info-content">2015</p>
                </li>
                <li>
                  <p class="project-info-label">Categories</p>
                  <p class="project-info-content">Commercial, Interiors</p>
                </li>
                <li>
                  <p class="project-link">
                    <a class="btn btn-primary" target="_blank" href="#">View Project</a>
                  </p>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>

@endsection

@section('footer')
    <footer id="footer" class="footer bg-overlay">
        <div class="footer-main">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-md-6 footer-widget footer-about">
                        <h3 class="widget-title">A Propos</h3>
                        <img loading="lazy" width="200px" class="footer-logo"
                            src="{{ asset('front-end/images/logo5.jpg') }}" alt="Constra">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done
                            idunt ut
                            labore et dolore magna aliqua.</p>
                        <div class="footer-social">
                            <ul>
                                <li><a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li><a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="#" aria-label="Github"><i class="fab fa-github"></i></a></li>
                            </ul>
                        </div><!-- Footer social end -->
                    </div><!-- Col end -->

                    <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
                        <h3 class="widget-title">Notre Horaire</h3>
                        <div class="working-hours">
                            Nous sommes ouvert 7 / 7 jours, chaque jour excepté les jours feriés.contactez-nous en cas
                            d'urgence, avec Notre
                            numéro ou par le formulaire de contact.
                            <br><br> Lundi - Vendredi: <span class="text-right">10:00 - 16:00 </span>
                            <br> Samedy: <span class="text-right">12:00 - 15:00</span>
                            <br> Dimanche: <span class="text-right">09:00 - 12:00</span>
                        </div>
                    </div><!-- Col end -->

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
                        <h3 class="widget-title">Services</h3>
                        <ul class="list-arrow">
                            @foreach ($services as $item)
                                <li><a href="#">{{ $item->service_name }} </a></li>
                            @endforeach
                        </ul>
                    </div><!-- Col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Footer main end -->

        <div class="copyright" style="background-color: #1c1c1d;">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="copyright-info text-white">
                            <span>Copyright &copy;
                                <script>
                                    document.write(new Date().getFullYear())
                                </script>, Designed &amp; Developed by <a
                                    href="https://themefisher.com">Team Solide</a>
                            </span>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="footer-menu text-center text-md-right">
                            <ul class="list-unstyled text-white">
                                <li><a href="{{ url('/about') }}">A propos de nous</a></li>
                                <li><a href="#">Partenaires</a></li>
                                <li><a href="#">Temoignage</a></li>
                                <li><a href="#">Faq</a></li>
                                <li><a href="#">Projets</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!-- Row end -->

                <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
                    <button class="btn btn-primary" title="Back to Top">
                        <i class="fa fa-angle-double-up"></i>
                    </button>
                </div>

            </div><!-- Container end -->
        </div><!-- Copyright end -->
    </footer>
@endsection