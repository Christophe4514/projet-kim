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
<!--/ Topbar end -->
<!-- Header start -->
<header id="header" class="header-two">
    <div class="site-navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light p-0">

                        <div class="logo">
                            <a class="d-block" href="index-2.html">
                                <img loading="lazy" src="{{ asset('front-end/images/logo1.png') }}"
                                    alt="Kim-engineering">
                                    {{-- <span ><em>Kim-engineering</em></span> --}}
                            </a>
                        </div><!-- logo end -->

                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div id="navbar-collapse" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav ml-auto align-items-center">
                                <li><a href="{{url('/')}}">Home </a></li>
                                <li class="nav-item dropdown">
                                    <a href="{{url('/serviceLink')}}" class="nav-link dropdown-toggle" data-toggle="dropdown">Services
                                        <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{url('/services')}}">Toutes les Services</a></li>
                                       
                                        @foreach ($servicesName as $item)
                                        <li><a href="#">{{$item->service_name}} </a></li>
                                        @endforeach
                                    </ul>
                                </li>

                                {{-- <li class="nav-item dropdown">
                                    <a href="{{url('/about')}}" class="nav-link dropdown-toggle" data-toggle="dropdown">About <i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{url('/about')}}">About Us</a></li>
                                        <li><a href="#">Project</a></li>
                                        <li><a href="#">Blog</a></li>
                                        <li><a href="#">Faq</a></li>
                                        <li><a href="#">Partnership & Job Vacancy</a></li>
                                    </ul>
                                </li> --}}
                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle"
                                        data-toggle="dropdown">L'Entreprise <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{url('/about')}}">A propos de nous</a></li>
                                        <li><a href="#">Partenaires</a></li>
                                        <li><a href="#">Temoignage</a></li>
                                        <li><a href="#">Faq</a></li>
                                        <li><a href="#">Projets</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item dropdown">
                                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">News <i
                                            class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">News </a></li>
                                        <li><a href="#">Future</a></li>
                                    </ul>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="{{url('/contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!--/ Col end -->
            </div>
            <!--/ Row end -->
        </div>
        <!--/ Container end -->

    </div>
    <!--/ Navigation end -->
</header>
