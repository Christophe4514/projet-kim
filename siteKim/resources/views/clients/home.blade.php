@extends('client-layouts.client')

@section('content')
        <!--/ Container end -->
        @include('includes.client-header')
        <!--/ Header end -->

        @include('includes.carousel')

        @include('includes.client-contenu')

        @include('includes.project')
        <!--/ News end -->

        @include('includes.newsletter')

        
        @include('includes.client-footer')
        <!-- Footer end -->
    @endsection
