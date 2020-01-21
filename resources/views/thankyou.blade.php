@extends('layouts.app', ['body_class' => 'thank-you'])

@section('content')

<div class="jumbotron text-center ty">
  <h1 class="display-3">Thank You!</h1>
  <p class="lead"><strong>Please check your account</strong> to view your order information.</p>
  <hr>
  <p>
    Have a question? <a href="">Contact us</a>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="/" role="button">Continue to homepage</a>
  </p>
</div>

@endsection