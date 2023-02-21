@extends('client-layouts.client')

@section('content')
    @include('includes.client-header')

    @include('includes.services.banner-service')

    <section id="main-container" class="main-container pb-2">
        <div class="container">
          <div class="row">
      
            <div class="col-lg-4 col-md-6 mb-5">
              <div class="ts-service-box">
                  <div class="ts-service-image-wrapper">
                    <img loading="lazy" class="w-100" src="{{asset('front-end/images/services/service1.jpg') }}" alt="service-image">
                  </div>
                  <div class="d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="{{asset('front-end/images/icon-image/service-icon1.png') }}" alt="service-icon">
                    </div>
                    <div class="ts-service-info">
                        <h3 class="service-box-title"><a href="service-single.html">Zero Harm Everyday</a></h3>
                        <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like. Lorem ipsum dolor suscipit.</p>
                        <a class="learn-more d-inline-block" href="service-single.html" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                    </div>
                  </div>
              </div><!-- Service1 end -->
            </div><!-- Col 1 end -->
      
            <div class="col-lg-4 col-md-6 mb-5">
              <div class="ts-service-box">
                  <div class="ts-service-image-wrapper">
                    <img loading="lazy" class="w-100" src="{{asset('front-end/images/services/service2.jpg') }}" alt="service-image">
                  </div>
                  <div class="d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="{{asset('front-end/images/icon-image/service-icon2.png') }}" alt="service-icon">
                    </div>
                    <div class="ts-service-info">
                        <h3 class="service-box-title"><a href="service-single.html">Virtual Construction</a></h3>
                        <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like. Lorem ipsum dolor suscipit.</p>
                        <a class="learn-more d-inline-block" href="service-single.html" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                    </div>
                  </div>
              </div><!-- Service2 end -->
            </div><!-- Col 2 end -->
      
            <div class="col-lg-4 col-md-6 mb-5">
              <div class="ts-service-box">
                  <div class="ts-service-image-wrapper">
                    <img loading="lazy" class="w-100" src="{{asset('front-end/images/services/service3.jpg') }}" alt="service-image">
                  </div>
                  <div class="d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="{{asset('front-end/images/icon-image/service-icon3.png') }}" alt="service-icon">
                    </div>
                    <div class="ts-service-info">
                        <h3 class="service-box-title"><a href="service-single.html">Build To Last</a></h3>
                        <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like. Lorem ipsum dolor suscipit.</p>
                        <a class="learn-more d-inline-block" href="service-single.html" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                    </div>
                  </div>
              </div><!-- Service3 end -->
            </div><!-- Col 3 end -->
      
            <div class="col-lg-4 col-md-6 mb-5">
              <div class="ts-service-box">
                  <div class="ts-service-image-wrapper">
                    <img loading="lazy" class="w-100" src="{{asset('front-end/images/services/service4.jpg') }}" alt="service-image">
                  </div>
                  <div class="d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="{{asset('front-end/images/icon-image/service-icon4.png') }}" alt="service-icon">
                    </div>
                    <div class="ts-service-info">
                        <h3 class="service-box-title"><a href="service-single.html">EXTERIOR DESIGN</a></h3>
                        <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like. Lorem ipsum dolor suscipit.</p>
                        <a class="learn-more d-inline-block" href="service-single.html" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                    </div>
                  </div>
              </div><!-- Service1 end -->
            </div><!-- Col 4 end -->
      
            <div class="col-lg-4 col-md-6 mb-5">
              <div class="ts-service-box">
                  <div class="ts-service-image-wrapper">
                    <img loading="lazy" class="w-100" src="{{asset('front-end/images/services/service5.jpg') }}" alt="service-image">
                  </div>
                  <div class="d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="{{asset('front-end/images/icon-image/service-icon5.png') }}" alt="service-icon">
                    </div>
                    <div class="ts-service-info">
                        <h3 class="service-box-title"><a href="service-single.html">RENOVATION</a></h3>
                        <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like. Lorem ipsum dolor suscipit.</p>
                        <a class="learn-more d-inline-block" href="service-single.html" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                    </div>
                  </div>
              </div><!-- Service2 end -->
            </div><!-- Col 5 end -->
      
            <div class="col-lg-4 col-md-6 mb-5">
              <div class="ts-service-box">
                  <div class="ts-service-image-wrapper">
                    <img loading="lazy" class="w-100" src="{{asset('front-end/images/services/service6.jpg') }}" alt="service-image">
                  </div>
                  <div class="d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="{{asset('front-end/images/icon-image/service-icon6.png') }}" alt="service-icon">
                    </div>
                    <div class="ts-service-info">
                        <h3 class="service-box-title"><a href="service-single.html">SAFETY MANAGEMENT</a></h3>
                        <p>You have ideas, goals, and dreams. We have a culturally diverse, forward thinking team looking for talent like. Lorem ipsum dolor suscipit.</p>
                        <a class="learn-more d-inline-block" href="service-single.html" aria-label="service-details"><i class="fa fa-caret-right"></i> Learn more</a>
                    </div>
                  </div>
              </div><!-- Service3 end -->
            </div><!-- Col 6 end -->
      
          </div><!-- Main row end -->
        </div><!-- Conatiner end -->
      </section>

    {{-- <section>
        <div class="container">
            <div class="row">
                <div class="col-8">
                    @foreach ($servicesName as $item)
                        <div class="card mb-3" style="max-width: 720px;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{ $item->service_image }}" class="img-fluid rounded-start" alt="{{ $item->service_name }}">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $item->service_name }}</h5>
                                        <p class="card-text">{{ $item->service_description }}</p>
                                        <p class="card-text"><small class="text-muted">{{'Creer le'}} {{ $item->created_at }}</small></p>
                                    </div>
                                </div>
                            </div>
                            <div class="general-btn text-center mt-4 ">
                                <a class="btn btn-primary " style="background-color: #03224c;" href="#">Detail</a>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-4">
                    <div class="card" style="width: 18rem;">
                        <li class="list-group-item btn-primary"><a href="{{ url('/service') }}">Toutes les Services</a></li>
                        @foreach ($servicesName as $item)
                            <li class="list-group-item btn btn-primary"><a href="#">{{ $item->service_name }} </a></li>
                        @endforeach
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section> --}}

    @include('includes.client-footer')
@endsection
