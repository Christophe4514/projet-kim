@extends('client-layouts.client')


@section('content')
    @include('includes.client-header')

    @include('includes.carousel')

    @include('includes.about')

    @include('includes.client-contenu')

    @include('includes.temoignage')

    @include('includes.single-project')

    @include('includes.newsletter')

    @include('includes.contact')

    @include('includes.client-footer')
@endsection
