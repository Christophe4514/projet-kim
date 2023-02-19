@extends('client-layouts.client')

@section('content')
    <div class="body-inner">
        <!--/ Container end -->
        @include('includes.client-header')
        <!--/ Header end -->

       @include('includes.carousel')

        <section id="ts-features" class="ts-features pb-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('front-end/images/services/service1.jpg') }}" alt="service-image">
                            </div>
                            <div class="d-flex">
                                <div class="ts-service-box-img">
                                    <img loading="lazy" src="{{ asset('front-end/images/icon-image/service-icon1.png') }}"
                                        alt="service-icon" />
                                </div>
                                <div class="ts-service-info">
                                    <h3 class="service-box-title"><a href="service-single.html">Zero Harm Everyday</a>
                                    </h3>
                                    <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking
                                        team looking for talent like. Lorem ipsum dolor suscipit.</p>
                                    <a class="learn-more d-inline-block" href="service-single.html"
                                        aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                                </div>
                            </div>
                        </div><!-- Service1 end -->
                    </div><!-- Col 1 end -->

                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('front-end/images/services/service2.jpg') }}" alt="service-image">
                            </div>
                            <div class="d-flex">
                                <div class="ts-service-box-img">
                                    <img loading="lazy" src="{{ asset('front-end/images/icon-image/service-icon2.png') }}"
                                        alt="service-icon" />
                                </div>
                                <div class="ts-service-info">
                                    <h3 class="service-box-title"><a href="service-single.html">Virtual Construction</a>
                                    </h3>
                                    <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking
                                        team looking for talent like. Lorem ipsum dolor suscipit.</p>
                                    <a class="learn-more d-inline-block" href="service-single.html"
                                        aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                                </div>
                            </div>
                        </div><!-- Service2 end -->
                    </div><!-- Col 2 end -->

                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="ts-service-box">
                            <div class="ts-service-image-wrapper">
                                <img loading="lazy" class="w-100"
                                    src="{{ asset('front-end/images/services/service3.jpg') }}" alt="service-image">
                            </div>
                            <div class="d-flex">
                                <div class="ts-service-box-img">
                                    <img loading="lazy" src="{{ asset('front-end/images/icon-image/service-icon3.png') }}"
                                        alt="service-icon" />
                                </div>
                                <div class="ts-service-info">
                                    <h3 class="service-box-title"><a href="service-single.html">Build To Last</a></h3>
                                    <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking
                                        team looking for talent like. Lorem ipsum dolor suscipit.</p>
                                    <a class="learn-more d-inline-block" href="service-single.html"
                                        aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                                </div>
                            </div>
                        </div><!-- Service3 end -->
                    </div><!-- Col 3 end -->
                </div><!-- Content row end -->
            </div><!-- Container end -->
        </section><!-- Feature are end -->

        <section id="facts" class="facts-area dark-bg">
            <div class="container">
                <div class="facts-wrapper">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 ts-facts">
                            <div class="ts-facts-img">
                                <img loading="lazy" src="{{ asset('front-end/images/icon-image/fact1.png') }}"
                                    alt="facts-img">
                            </div>
                            <div class="ts-facts-content">
                                <h2 class="ts-facts-num"><span class="counterUp" data-count="1789">0</span></h2>
                                <h3 class="ts-facts-title">Total Projects</h3>
                            </div>
                        </div><!-- Col end -->

                        <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-sm-0">
                            <div class="ts-facts-img">
                                <img loading="lazy" src="{{ asset('front-end/images/icon-image/fact2.png') }}"
                                    alt="facts-img">
                            </div>
                            <div class="ts-facts-content">
                                <h2 class="ts-facts-num"><span class="counterUp" data-count="647">0</span></h2>
                                <h3 class="ts-facts-title">Staff Members</h3>
                            </div>
                        </div><!-- Col end -->

                        <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                            <div class="ts-facts-img">
                                <img loading="lazy" src="{{ asset('front-end/images/icon-image/fact3.png') }}"
                                    alt="facts-img">
                            </div>
                            <div class="ts-facts-content">
                                <h2 class="ts-facts-num"><span class="counterUp" data-count="4000">0</span></h2>
                                <h3 class="ts-facts-title">Hours of Work</h3>
                            </div>
                        </div><!-- Col end -->

                        <div class="col-md-3 col-sm-6 ts-facts mt-5 mt-md-0">
                            <div class="ts-facts-img">
                                <img loading="lazy" src="{{ asset('front-end/images/icon-image/fact4.png') }}"
                                    alt="facts-img">
                            </div>
                            <div class="ts-facts-content">
                                <h2 class="ts-facts-num"><span class="counterUp" data-count="44">0</span></h2>
                                <h3 class="ts-facts-title">Countries Experience</h3>
                            </div>
                        </div><!-- Col end -->

                    </div> <!-- Facts end -->
                </div>
                <!--/ Content row end -->
            </div>
            <!--/ Container end -->
        </section><!-- Facts end -->

        <section id="ts-service-area" class="ts-service-area pb-0">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <h2 class="section-title">We Are Specialists In</h2>
                        <h3 class="section-sub-title">What We Do</h3>
                    </div>
                </div>
                <!--/ Title row end -->

                <div class="row">
                    <div class="col-lg-4">
                        <div class="ts-service-box d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="{{ asset('front-end/images/icon-image/service-icon1.png') }}"
                                    alt="service-icon">
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title"><a href="#">Home Construction</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                            </div>
                        </div><!-- Service 1 end -->

                        <div class="ts-service-box d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="{{ asset('front-end/images/icon-image/service-icon2.png') }}"
                                    alt="service-icon">
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title"><a href="#">Building Remodels</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                            </div>
                        </div><!-- Service 2 end -->

                        <div class="ts-service-box d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="{{ asset('front-end/images/icon-image/service-icon3.png') }}"
                                    alt="service-icon">
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title"><a href="#">Interior Design</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                            </div>
                        </div><!-- Service 3 end -->

                    </div><!-- Col end -->

                    <div class="col-lg-4 text-center">
                        <img loading="lazy" class="img-fluid"
                            src="{{ asset('front-end/images/services/service-center.jpg') }}" alt="service-avater-image">
                    </div><!-- Col end -->

                    <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
                        <div class="ts-service-box d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="{{ asset('front-end/images/icon-image/service-icon4.png') }}"
                                    alt="service-icon">
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title"><a href="#">Exterior Design</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                            </div>
                        </div><!-- Service 4 end -->

                        <div class="ts-service-box d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="{{ asset('front-end/images/icon-image/service-icon5.png') }}"
                                    alt="service-icon">
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title"><a href="#">Renovation</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                            </div>
                        </div><!-- Service 5 end -->

                        <div class="ts-service-box d-flex">
                            <div class="ts-service-box-img">
                                <img loading="lazy" src="{{ asset('front-end/images/icon-image/service-icon6.png') }}"
                                    alt="service-icon">
                            </div>
                            <div class="ts-service-box-info">
                                <h3 class="service-box-title"><a href="#">Safety Management</a></h3>
                                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                            </div>
                        </div><!-- Service 6 end -->
                    </div><!-- Col end -->
                </div><!-- Content row end -->

            </div>
            <!--/ Container end -->
        </section><!-- Service end -->

        <section id="project-area" class="project-area solid-bg">
            <div class="container">
                <div class="row text-center">
                    <div class="col-lg-12">
                        <h2 class="section-title">Work of Excellence</h2>
                        <h3 class="section-sub-title">Recent Projects</h3>
                    </div>
                </div>
                <!--/ Title row end -->

                <div class="row">
                    <div class="col-12">
                        <div class="shuffle-btn-group">
                            <label class="active" for="all">
                                <input type="radio" name="shuffle-filter" id="all" value="all"
                                    checked="checked">Show All
                            </label>
                            <label for="commercial">
                                <input type="radio" name="shuffle-filter" id="commercial"
                                    value="commercial">Commercial
                            </label>
                            <label for="education">
                                <input type="radio" name="shuffle-filter" id="education" value="education">Education
                            </label>
                            <label for="government">
                                <input type="radio" name="shuffle-filter" id="government"
                                    value="government">Government
                            </label>
                            <label for="infrastructure">
                                <input type="radio" name="shuffle-filter" id="infrastructure"
                                    value="infrastructure">Infrastructure
                            </label>
                            <label for="residential">
                                <input type="radio" name="shuffle-filter" id="residential"
                                    value="residential">Residential
                            </label>
                            <label for="healthcare">
                                <input type="radio" name="shuffle-filter" id="healthcare"
                                    value="healthcare">Healthcare
                            </label>
                        </div><!-- project filter end -->


                        <div class="row shuffle-wrapper">
                            <div class="col-1 shuffle-sizer"></div>

                            <div class="col-lg-4 col-md-6 shuffle-item"
                                data-groups="[&quot;government&quot;,&quot;healthcare&quot;]">
                                <div class="project-img-container">
                                    <a class="gallery-popup" href="images/projects/project1.jpg')}}"
                                        aria-label="project-img">
                                        <img class="img-fluid"
                                            src="{{ asset('front-end/images/projects/project1.jpg') }}"
                                            alt="project-img">
                                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <h3 class="project-item-title">
                                                <a href="projects-single.html">Capital Teltway Building</a>
                                            </h3>
                                            <p class="project-cat">Commercial, Interiors</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- shuffle item 1 end -->

                            <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;healthcare&quot;]">
                                <div class="project-img-container">
                                    <a class="gallery-popup" href="images/projects/project2.jpg')}}"
                                        aria-label="project-img">
                                        <img class="img-fluid"
                                            src="{{ asset('front-end/images/projects/project2.jpg') }}"
                                            alt="project-img">
                                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <h3 class="project-item-title">
                                                <a href="projects-single.html">Ghum Touch Hospital</a>
                                            </h3>
                                            <p class="project-cat">Healthcare</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- shuffle item 2 end -->

                            <div class="col-lg-4 col-md-6 shuffle-item"
                                data-groups="[&quot;infrastructure&quot;,&quot;commercial&quot;]">
                                <div class="project-img-container">
                                    <a class="gallery-popup" href="images/projects/project3.jpg')}}"
                                        aria-label="project-img">
                                        <img class="img-fluid"
                                            src="{{ asset('front-end/images/projects/project3.jpg') }}"
                                            alt="project-img">
                                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <h3 class="project-item-title">
                                                <a href="projects-single.html">TNT East Facility</a>
                                            </h3>
                                            <p class="project-cat">Government</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- shuffle item 3 end -->

                            <div class="col-lg-4 col-md-6 shuffle-item"
                                data-groups="[&quot;education&quot;,&quot;infrastructure&quot;]">
                                <div class="project-img-container">
                                    <a class="gallery-popup" href="images/projects/project4.jpg')}}"
                                        aria-label="project-img">
                                        <img class="img-fluid"
                                            src="{{ asset('front-end/images/projects/project4.jpg') }}"
                                            alt="project-img">
                                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <h3 class="project-item-title">
                                                <a href="projects-single.html">Narriot Headquarters</a>
                                            </h3>
                                            <p class="project-cat">Infrastructure</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- shuffle item 4 end -->

                            <div class="col-lg-4 col-md-6 shuffle-item"
                                data-groups="[&quot;infrastructure&quot;,&quot;education&quot;]">
                                <div class="project-img-container">
                                    <a class="gallery-popup" href="images/projects/project5.jpg')}}"
                                        aria-label="project-img">
                                        <img class="img-fluid"
                                            src="{{ asset('front-end/images/projects/project5.jpg') }}"
                                            alt="project-img">
                                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <h3 class="project-item-title">
                                                <a href="projects-single.html">Kalas Metrorail</a>
                                            </h3>
                                            <p class="project-cat">Infrastructure</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- shuffle item 5 end -->

                            <div class="col-lg-4 col-md-6 shuffle-item" data-groups="[&quot;residential&quot;]">
                                <div class="project-img-container">
                                    <a class="gallery-popup" href="images/projects/project6.jpg')}}"
                                        aria-label="project-img">
                                        <img class="img-fluid"
                                            src="{{ asset('front-end/images/projects/project6.jpg') }}"
                                            alt="project-img">
                                        <span class="gallery-icon"><i class="fa fa-plus"></i></span>
                                    </a>
                                    <div class="project-item-info">
                                        <div class="project-item-info-content">
                                            <h3 class="project-item-title">
                                                <a href="projects-single.html">Ancraft Avenue House</a>
                                            </h3>
                                            <p class="project-cat">Residential</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- shuffle item 6 end -->
                        </div><!-- shuffle end -->
                    </div>

                    <div class="col-12">
                        <div class="general-btn text-center">
                            <a class="btn btn-primary" href="projects.html">View All Projects</a>
                        </div>
                    </div>

                </div><!-- Content row end -->
            </div>
            <!--/ Container end -->
        </section><!-- Project area end -->

        <section class="content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3 class="column-title">Testimonials</h3>

                        <div id="testimonial-slide" class="testimonial-slide">
                            <div class="item">
                                <div class="quote-item">
                                    <span class="quote-text">
                                        Question ran over her cheek When she reached the first hills of the Italic
                                        Mountains, she had a last
                                        view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet
                                        Village and the
                                        subline of her own road.
                                    </span>

                                    <div class="quote-item-footer">
                                        <img loading="lazy" class="testimonial-thumb"
                                            src="{{ asset('front-end/images/clients/testimonial1.png') }}"
                                            alt="testimonial">
                                        <div class="quote-item-info">
                                            <h3 class="quote-author">Gabriel Denis</h3>
                                            <span class="quote-subtext">Chairman, OKT</span>
                                        </div>
                                    </div>
                                </div><!-- Quote item end -->
                            </div>
                            <!--/ Item 1 end -->

                            <div class="item">
                                <div class="quote-item">
                                    <span class="quote-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci
                                        done idunt ut
                                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion
                                        ullamco laboris
                                        nisi aliquip consequat.
                                    </span>

                                    <div class="quote-item-footer">
                                        <img loading="lazy" class="testimonial-thumb"
                                            src="{{ asset('front-end/images/clients/testimonial2.png') }}"
                                            alt="testimonial">
                                        <div class="quote-item-info">
                                            <h3 class="quote-author">Weldon Cash</h3>
                                            <span class="quote-subtext">CFO, First Choice</span>
                                        </div>
                                    </div>
                                </div><!-- Quote item end -->
                            </div>
                            <!--/ Item 2 end -->

                            <div class="item">
                                <div class="quote-item">
                                    <span class="quote-text">
                                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci
                                        done idunt ut
                                        labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion
                                        ullamco laboris
                                        nisi ut commodo consequat.
                                    </span>

                                    <div class="quote-item-footer">
                                        <img loading="lazy" class="testimonial-thumb"
                                            src="{{ asset('front-end/images/clients/testimonial3.png') }}"
                                            alt="testimonial">
                                        <div class="quote-item-info">
                                            <h3 class="quote-author">Minter Puchan</h3>
                                            <span class="quote-subtext">Director, AKT</span>
                                        </div>
                                    </div>
                                </div><!-- Quote item end -->
                            </div>
                            <!--/ Item 3 end -->

                        </div>
                        <!--/ Testimonial carousel end-->
                    </div><!-- Col end -->

                    <div class="col-lg-6 mt-5 mt-lg-0">

                        <h3 class="column-title">Happy Clients</h3>

                        <div class="row all-clients">
                            <div class="col-sm-4 col-6">
                                <figure class="clients-logo">
                                    <a href="#!"><img loading="lazy" class="img-fluid"
                                            src="{{ asset('front-end/images/clients/client1.png') }}"
                                            alt="clients-logo" /></a>
                                </figure>
                            </div><!-- Client 1 end -->

                            <div class="col-sm-4 col-6">
                                <figure class="clients-logo">
                                    <a href="#!"><img loading="lazy" class="img-fluid"
                                            src="{{ asset('front-end/images/clients/client2.png') }}"
                                            alt="clients-logo" /></a>
                                </figure>
                            </div><!-- Client 2 end -->

                            <div class="col-sm-4 col-6">
                                <figure class="clients-logo">
                                    <a href="#!"><img loading="lazy" class="img-fluid"
                                            src="{{ asset('front-end/images/clients/client3.png') }}"
                                            alt="clients-logo" /></a>
                                </figure>
                            </div><!-- Client 3 end -->

                            <div class="col-sm-4 col-6">
                                <figure class="clients-logo">
                                    <a href="#!"><img loading="lazy" class="img-fluid"
                                            src="{{ asset('front-end/images/clients/client4.png') }}"
                                            alt="clients-logo" /></a>
                                </figure>
                            </div><!-- Client 4 end -->

                            <div class="col-sm-4 col-6">
                                <figure class="clients-logo">
                                    <a href="#!"><img loading="lazy" class="img-fluid"
                                            src="{{ asset('front-end/images/clients/client5.png') }}"
                                            alt="clients-logo" /></a>
                                </figure>
                            </div><!-- Client 5 end -->

                            <div class="col-sm-4 col-6">
                                <figure class="clients-logo">
                                    <a href="#!"><img loading="lazy" class="img-fluid"
                                            src="{{ asset('front-end/images/clients/client6.png') }}"
                                            alt="clients-logo" /></a>
                                </figure>
                            </div><!-- Client 6 end -->

                        </div><!-- Clients row end -->

                    </div><!-- Col end -->

                </div>
                <!--/ Content row end -->
            </div>
            <!--/ Container end -->
        </section><!-- Content end -->

        <section class="subscribe no-padding">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="subscribe-call-to-acton">
                            <h3>Can We Help?</h3>
                            <h4>(+9) 847-291-4353</h4>
                        </div>
                    </div><!-- Col end -->

                    <div class="col-lg-8">
                        <div class="ts-newsletter row align-items-center">
                            <div class="col-md-5 newsletter-introtext">
                                <h4 class="text-white mb-0">Newsletter Sign-up</h4>
                                <p class="text-white">Latest updates and news</p>
                            </div>

                            <div class="col-md-7 newsletter-form">
                                <form action="#" method="post">
                                    <div class="form-group">
                                        <label for="newsletter-email" class="content-hidden">Newsletter Email</label>
                                        <input type="email" name="email" id="newsletter-email"
                                            class="form-control form-control-lg"
                                            placeholder="Your your email and hit enter" autocomplete="off">
                                    </div>
                                </form>
                            </div>
                        </div><!-- Newsletter end -->
                    </div><!-- Col end -->

                </div><!-- Content row end -->
            </div>
            <!--/ Container end -->
        </section>
        <!--/ subscribe end -->

        <section id="news" class="news">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <h2 class="section-title">Work of Excellence</h2>
                        <h3 class="section-sub-title">Recent Projects</h3>
                    </div>
                </div>
                <!--/ Title row end -->

                <div class="row">
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="latest-post">
                            <div class="latest-post-media">
                                <a href="news-single.html" class="latest-post-img">
                                    <img loading="lazy" class="img-fluid"
                                        src="{{ asset('front-end/images/news/news1.jpg') }}" alt="img">
                                </a>
                            </div>
                            <div class="post-body">
                                <h4 class="post-title">
                                    <a href="news-single.html" class="d-inline-block">We Just Completes $17.6 million
                                        Medical Clinic in Mid-Missouri</a>
                                </h4>
                                <div class="latest-post-meta">
                                    <span class="post-item-date">
                                        <i class="fa fa-clock-o"></i> July 20, 2017
                                    </span>
                                </div>
                            </div>
                        </div><!-- Latest post end -->
                    </div><!-- 1st post col end -->

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="latest-post">
                            <div class="latest-post-media">
                                <a href="news-single.html" class="latest-post-img">
                                    <img loading="lazy" class="img-fluid"
                                        src="{{ asset('front-end/images/news/news2.jpg') }}" alt="img">
                                </a>
                            </div>
                            <div class="post-body">
                                <h4 class="post-title">
                                    <a href="news-single.html" class="d-inline-block">Thandler Airport Water Reclamation
                                        Facility Expansion Project Named</a>
                                </h4>
                                <div class="latest-post-meta">
                                    <span class="post-item-date">
                                        <i class="fa fa-clock-o"></i> June 17, 2017
                                    </span>
                                </div>
                            </div>
                        </div><!-- Latest post end -->
                    </div><!-- 2nd post col end -->

                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="latest-post">
                            <div class="latest-post-media">
                                <a href="news-single.html" class="latest-post-img">
                                    <img loading="lazy" class="img-fluid"
                                        src="{{ asset('front-end/images/news/news3.jpg') }}" alt="img">
                                </a>
                            </div>
                            <div class="post-body">
                                <h4 class="post-title">
                                    <a href="news-single.html" class="d-inline-block">Silicon Bench and Cornike Begin
                                        Construction Solar Facilities</a>
                                </h4>
                                <div class="latest-post-meta">
                                    <span class="post-item-date">
                                        <i class="fa fa-clock-o"></i> Aug 13, 2017
                                    </span>
                                </div>
                            </div>
                        </div><!-- Latest post end -->
                    </div><!-- 3rd post col end -->
                </div>
                <!--/ Content row end -->

                <div class="general-btn text-center mt-4">
                    <a class="btn btn-primary" href="news-left-sidebar.html">See All Posts</a>
                </div>

            </div>
            <!--/ Container end -->
        </section>
        <!--/ News end -->

        <footer id="footer" class="footer bg-overlay">
            <div class="footer-main">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-4 col-md-6 footer-widget footer-about">
                            <h3 class="widget-title">About Us</h3>
                            <img loading="lazy" width="200px" class="footer-logo"
                                src="{{ asset('front-end/images/footer-logo.png') }}" alt="Constra">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done
                                idunt ut
                                labore et dolore magna aliqua.</p>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="https://facebook.com/themefisher" aria-label="Facebook"><i
                                                class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="https://twitter.com/themefisher" aria-label="Twitter"><i
                                                class="fab fa-twitter"></i></a>
                                    </li>
                                    <li><a href="https://instagram.com/themefisher" aria-label="Instagram"><i
                                                class="fab fa-instagram"></i></a></li>
                                    <li><a href="https://github.com/themefisher" aria-label="Github"><i
                                                class="fab fa-github"></i></a></li>
                                </ul>
                            </div><!-- Footer social end -->
                        </div><!-- Col end -->

                        <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
                            <h3 class="widget-title">Working Hours</h3>
                            <div class="working-hours">
                                We work 7 days a week, every day excluding major holidays. Contact us if you have an
                                emergency, with our
                                Hotline and Contact form.
                                <br><br> Monday - Friday: <span class="text-right">10:00 - 16:00 </span>
                                <br> Saturday: <span class="text-right">12:00 - 15:00</span>
                                <br> Sunday and holidays: <span class="text-right">09:00 - 12:00</span>
                            </div>
                        </div><!-- Col end -->

                        <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
                            <h3 class="widget-title">Services</h3>
                            <ul class="list-arrow">
                                <li><a href="service-single.html">Pre-Construction</a></li>
                                <li><a href="service-single.html">General Contracting</a></li>
                                <li><a href="service-single.html">Construction Management</a></li>
                                <li><a href="service-single.html">Design and Build</a></li>
                                <li><a href="service-single.html">Self-Perform Construction</a></li>
                            </ul>
                        </div><!-- Col end -->
                    </div><!-- Row end -->
                </div><!-- Container end -->
            </div><!-- Footer main end -->

            <div class="copyright">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="copyright-info">
                                <span>Copyright &copy;
                                    <script>
                                        document.write(new Date().getFullYear())
                                    </script>, Designed &amp; Developed by <a
                                        href="https://themefisher.com">Themefisher</a>
                                </span>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="footer-menu text-center text-md-right">
                                <ul class="list-unstyled">
                                    <li><a href="about.html">About</a></li>
                                    <li><a href="team.html">Our people</a></li>
                                    <li><a href="faq.html">Faq</a></li>
                                    <li><a href="news-left-sidebar.html">Blog</a></li>
                                    <li><a href="pricing.html">Pricing</a></li>
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
        </footer><!-- Footer end -->
    @endsection
