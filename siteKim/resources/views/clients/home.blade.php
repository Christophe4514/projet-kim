@extends('client-layouts.client')


@section('content')
    <!--/ Container end -->
    @include('includes.client-header')
    <!--/ Header end -->

    @include('includes.carousel')

    @include('includes.about')

    @include('includes.client-contenu')

    @include('includes.temoignage')

    @include('includes.single-project')
    <!--/ News end -->

    @include('includes.contact')

    @include('includes.newsletter')


    @include('includes.client-footer')
    <!-- Footer end -->
@endsection
