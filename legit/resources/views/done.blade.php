<?php \Cart::destroy(); ?>

@extends('layouts.app')

@section('content')
<div class="container">
  <!-- Jumbotron Header -->
  <header class="jumbotron" style="height: 200px; margin-top: 2rem; margin-bottom: 2rem; background: url(img/login.png); background-size: 100% 100%; background-position: center;">
  </header>

  @if (Auth::check())
  <fieldset>
    <legend>Order complete</legend>
    <div class="row">
      <div class="col-lg-12 col-md-12">
        <div class="alert alert-success" role="alert">
          Thanks for your order. You can now leave the website.
        </div>
        <p><center><i class="fa fa-check" style="font-size: 100px; text-align: center; color: #48ab6c;"></i></center></p>
        <p>Thank you for visiting this website. Please go back to the survey to continue.</p>
        <p></p>
        <p></p>
      </div>
    </div>
  @else
    <div class="alert alert-danger" role="alert">
      Please login to see your cart.
    </div>
  @endif
</div>
@endsection
