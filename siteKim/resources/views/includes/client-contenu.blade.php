@include('includes.statistique')


<section id="ts-service-area" class="ts-service-area pb-0">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <h2 class="section-title">Nous sommes des spécialiste</h2>
                <h3 class="section-sub-title">Dans ce que nous faisons</h3>
            </div>
        </div>
        <div class="row">

            <div class="col-lg-4">
                @foreach ($servicesName as $item)
                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a
                                    href="{{ url('/detail_service', ['id' => $item->id]) }}">{{ $item->service_name }}</a>
                            </h3>
                            <p>{{ $item->service_description }}</p>
                        </div>
                @endforeach
            </div>
        </div>
        <div class="col-lg-4 text-center">
            <img loading="lazy" class="img-fluid" src="{{ asset('front-end/images/services/service-center.jpg') }}"
                alt="service-avater-image">
        </div>
        <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
            @foreach ($servicesName as $item)
                <div class="ts-service-box d-flex">
                    <div class="ts-service-box-img">
                        <img loading="lazy" src="{{ asset('front-end/images/icon-image/fact3.png') }}"
                            alt="service-icon">
                    </div>
                    <div class="ts-service-box-info">
                        <h3 class="service-box-title"><a
                                href="{{ url('/detail_service', ['id' => $item->id]) }}">{{ $item->service_name }}</a>
                        </h3>
                        <p><span>this service was created at </span>{{ $item->created_at }}</p>
                    </div>
            @endforeach
        </div>
    </div>
    </div>
</section>

@include('includes.project')

<section id="project-area" class="project-area solid-bg">
    <div class="container">
        <div class="row text-center">
            <div class="col-lg-12">
                <h2 class="section-title">Nous sommes fiers de </h2>
                <h3 class="section-sub-title">NOTRE EXPERTISE</h3>
            </div>
        </div>
    </div>
</section>
