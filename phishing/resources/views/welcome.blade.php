@extends('layouts.app')

@section('content')
<!-- Page Content -->
<div class="container">

  <!-- Jumbotron Header -->
  <header class="jumbotron my-4" style="background: url(img/banner2.png); background-size: 100% 115%; background-position: center;">
    <div class="row">
      <div class="col-md-6 col-lg-6">
        <h2 style="color: white;">The new IPhone X</h2>
        <p class="lead" style="color: white;">We have the new IPhone X back in stock. <br>Diffrent colours and models available.<BR><BR></p>
          <a href="/shop" class="btn btn-primary btn-lg">View all iPhone X models</a>
        </div>
        <div class="col-md-6 col-lg-6">
          &nbsp;
        </div>
      </header>

      <!-- Page Features -->
      <div class="row text-center">

        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card">
            <div class="card-img-top" style="padding-top: 20px;"><i class="fa fa-wrench" style="font-size: 60px; color: #158db8;"></i></div>
            <div class="card-body">
              <h4 class="card-title">Service</h4>
              <p class="card-text">Does your phone have problem? We can repair these within 3 working days. Our customers gave us an 8 for service!</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card">
            <div class="card-img-top" style="padding-top: 20px;"><i class="fa fa-truck" style="font-size: 60px; color: #158db8;"></i></div>
            <div class="card-body">
              <h4 class="card-title">Delivery</h4>
              <p class="card-text">Next day delivery when ordered before 22.00! After ordering you will immediatly receive a track and trace code.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-12 mb-4">
          <div class="card">
            <div class="card-img-top" style="padding-top: 20px;"><i class="fa fa-chalkboard-teacher" style="font-size: 60px; color: #158db8;"></i></div>
            <div class="card-body">
              <h4 class="card-title">Advice</h4>
              <p class="card-text">Are you not sure which device suits you best? Ask one of our employees for help via chat, the contact form or a call.</p>
            </div>
          </div>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
    @endsection
