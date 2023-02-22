@extends('client-layouts.client')

@section('content')
    @include('includes.client-header')

    @include('includes.banners.banner-faq')

    <section id="main-container" class="main-container">
        <div class="container">

            <div class="row">
                <div class="col-lg-8">
                    <h3 class="border-title border-left mar-t0">Les questions les plus posees</h3>

                    <div class="accordion accordion-group accordion-classic" id="construction-accordion">
                        @foreach ($question as $item)
                        <div class="card">
                            <div class="card-header p-0 bg-transparent" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-left" type="button" data-toggle="collapse"
                                        data-target="#collapse{{$item->id}}" aria-expanded="true" aria-controls="collapse{{$item->id}}">
                                        {{$item->question}}
                                    </button>
                                </h2>
                            </div>

                            <div id="collapse{{$item->id}}" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#construction-accordion">
                                <div class="card-body">
                                    {{$item->reponse}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="gap-40"></div>
                </div>

                <div class="col-lg-4 mt-5 mt-lg-0">

                    <div class="sidebar sidebar-right">
                        <div class="widget recent-posts">
                            <h3 class="widget-title">Les Posts les plus recents</h3>
                            <ul class="list-unstyled">
                                <li class="d-flex align-items-center">
                                    <div class="posts-thumb">
                                        <a href="#"><img loading="lazy" alt="news-image"
                                                src="{{ asset('front-end/images/news/news1.jpg') }}"></a>
                                    </div>
                                    <div class="post-info">
                                        <h4 class="entry-title">
                                            <a href="#">We Just Completes $17.6 Million Medical Clinic In
                                                Mid-missouri</a>
                                        </h4>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </section>

    @include('includes.client-footer')
@endsection
