@extends('client-layouts.client')

@section('title')
404
@endsection
@section('content')
<section id="main-container" class="main-container">
    <div class="container">

      <div class="row">

        <div class="col-12">
          <div class="error-page text-center">
            <div class="error-code">
              <h2><strong>404</strong></h2>
            </div>
            <div class="error-message">
              <h3>Oops... Cette page est introuvable!</h3>
            </div>
            <div class="error-body">
              Utilisez ce bouton pour retourner à la page d'accueil du site<br>
              <a href="{{url('/')}}" class="btn btn-primary">Back to Home Page</a>
            </div>
          </div>
        </div>

      </div><!-- Content row -->
    </div><!-- Conatiner end -->
  </section><!-- Main container end -->
@endsection
