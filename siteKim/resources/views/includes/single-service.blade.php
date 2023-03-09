<section id="main-container" class="main-container">
    <div class="container">
        <div class="row">

            <div class="col-xl-3 col-lg-4">
                <div class="sidebar sidebar-left">
                    <div class="widget">
                        <h3 class="widget-title">Services</h3>
                        <ul class="nav service-menu">
                            @foreach ($services as $item)
                                <li><a href="{{ url('/detail_service', ['id' => $item->id]) }}">{{ $item->service_name }}
                                    </a></li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="widget">
                        <div class="quote-item quote-border">
                            <div class="quote-text-border">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid.
                            </div>

                            <div class="quote-item-footer">
                                <img loading="lazy" class="testimonial-thumb"
                                    src="{{ asset('front-end/images/clients/testimonial1.png') }}" alt="testimonial">
                                <div class="quote-item-info">
                                    <h3 class="quote-author">Weldon Cash</h3>
                                    <span class="quote-subtext">CEO, First Choice Group</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8">
                <div class="content-inner-page">

                    <h2 class="column-title mrt-0">{{ $servicesName->service_name }}</h2>

                    <div class="row">
                        @foreach ($detail as $item)
                            <div class="col-md-12">
                                <h3 class="column-title-small">{{ $item->detail_titre }}</h3>
                                <p>{{ $item->detail_description }}</p>

                            </div>
                        @endforeach
                    </div>

                    <div class="gap-40"></div>

                    <div id="page-slider" class="page-slider">
                        @foreach ($detail as $item)
                            <div class="item">
                                <img loading="lazy" class="img-fluid"
                                    src="{{ asset("storage/detail_images/$item->detail_image ") }}"
                                    alt="project-slider-image" />
                            </div>
                        @endforeach

                    </div>

                    <div class="gap-40"></div>

                    <div class="row">
                        <div class="col-lg-6 mt-4 mt-lg-0">
                            <h3 class="into-sub-title">Nos valeurs</h3>
                            <p>Minim Austin 3 wolf moon scenester aesthetic, umami odio pariatur bitters. Pop-up
                                occaecat taxidermy
                                street art, tattooed beard literally.</p>

                            <div class="accordion accordion-group" id="our-values-accordion">
                                <div class="card">
                                    <div class="card-header p-0 bg-transparent" id="headingOne">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-left" type="button"
                                                data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne">
                                                La Sécurité
                                            </button>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#our-values-accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad
                                            squid. 3 wolf moon officia aute, non cupidata
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-0 bg-transparent" id="headingTwo">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                Le Service de clientèle
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#our-values-accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad
                                            squid. 3 wolf moon officia aute, non cupidata
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-0 bg-transparent" id="headingThree">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseThree"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                l'Intégrité
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#our-values-accordion">
                                        <div class="card-body">
                                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                            richardson ad
                                            squid. 3 wolf moon officia aute, non cupidata
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-0 bg-transparent" id="headingFor">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseFor" aria-expanded="false"
                                                aria-controls="collapseThree">
                                                La rigueur
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFor" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#our-values-accordion">
                                        <div class="card-body">
                                            Travail avec méthode et professionnalisme pour assurer l'excellence et le
                                            respect de nos
                                            engagements
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header p-0 bg-transparent" id="headingFive">
                                        <h2 class="mb-0">
                                            <button class="btn btn-block text-left collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseFive"
                                                aria-expanded="false" aria-controls="collapseThree">
                                                La passion
                                            </button>
                                        </h2>
                                    </div>
                                    <div id="collapseFive" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#our-values-accordion">
                                        <div class="card-body">
                                            Nous accomplissons notre travail avec amour et énergie
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gap-40"></div>
                </div>
            </div>
        </div>
    </div>
</section>
