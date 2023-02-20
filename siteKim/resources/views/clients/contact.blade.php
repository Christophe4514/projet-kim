@extends('client-layouts.client')

@section('content')
    @include('includes.client-header')

    @include('includes.contact')

    <div class="bg-light">
        <div class="container">
            <h3 class="section-sub-title">Suivez-nous sur les réseaux sociaux pour plus d'actu</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4 top-social text-center">
                <ul class="list-unstyled">
                    <li>
                        <a title="Facebook" href="#" style="font-size: 2.5rem">
                            <span class="social-icon"><i class="fab fa-facebook-f"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 top-social text-center">
                <ul class="list-unstyled">
                    <li>
                        <a title="Twitter" href="#" style="font-size: 2.5rem">
                            <span class="social-icon"><i class="fab fa-twitter"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-4 top-social text-center">
                <ul class="list-unstyled">
                    <li>
                        <a title="Instagram" href="#" style="font-size: 2.5rem">
                            <span class="social-icon"><i class="fab fa-instagram"></i></span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    @include('includes.client-footer')
@endsection
