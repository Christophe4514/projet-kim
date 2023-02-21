@extends('client-layouts.client')

@section('content')
    @include('includes.client-header')

    @include('includes.carousel')

    <section>
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
    </section>

    @include('includes.client-footer')
@endsection
