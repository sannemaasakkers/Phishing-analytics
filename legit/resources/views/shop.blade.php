@extends('layouts.app')

@section('content')
<div class="container">

  <!-- Jumbotron Header -->
  <header class="jumbotron" style="height: 200px; margin-top: 2rem; margin-bottom: 2rem; background: url(img/login.png); background-size: 100% 100%; background-position: center;">
  </header>

  <fieldset>
    <legend>All phones</legend>

    <div class="row text-center">

      <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="card-img-top" style="padding-top: 20px;"><img src="/img/x_black.jpeg" width="70%"></div>
          <div class="card-body">
            <h4 class="card-title">Apple iPhone X<br>256GB Space Grey</h4>
            <p></p>
            <p class="card-text">- 256GB of storage<BR>
                                 - 5,8 inch Retina HD screen<BR>
                                 - iOS 11</p>
                                 <p><b>&euro; 1259,-</b></p>
                                 @if (Auth::check())
                                 <form action="/cart" method="POST">
                                  {!! csrf_field() !!}
                                  <input type="hidden" name="id" value="1">
                                  <input type="hidden" name="name" value="Apple iPhone X - 256GB Space Grey">
                                  <input type="hidden" name="price" value="1259">
                                  <input type="submit" class="btn btn-primary" value="Add to cart"></p>
                                  </form>
                                 @else
                                   <p>Login to add to cart</p>
                                 @endif
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="card-img-top" style="padding-top: 20px;"><img src="/img/x_black.jpeg" width="70%"></div>
          <div class="card-body">
            <h4 class="card-title">Apple iPhone X<br>64GB Space Grey</h4>
            <p></p>
            <p class="card-text">- 64GB of storage<BR>
                                 - 5,8 inch Retina HD screen<BR>
                                 - iOS 11</p>
                                 <p><b>&euro; 1079,-</b></p>
                                 @if (Auth::check())
                                 <form action="/cart" method="POST">
                                  {!! csrf_field() !!}
                                  <input type="hidden" name="id" value="2">
                                  <input type="hidden" name="name" value="Apple iPhone X - 64GB Space Grey">
                                  <input type="hidden" name="price" value="1079">
                                  <input type="submit" class="btn btn-primary" value="Add to cart"></p>
                                  </form>
                                 @else
                                   <p>Login to add to cart</p>
                                 @endif

          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="card-img-top" style="padding-top: 20px;"><img src="/img/x_silver.jpeg" width="70%"></div>
          <div class="card-body">
            <h4 class="card-title">Apple iPhone X<br>256GB Silver</h4>
            <p></p>
            <p class="card-text">- 256GB of storage<BR>
                                 - 5,8 inch Retina HD screen<BR>
                                 - iOS 11</p>
                                 <p><b>&euro; 1259,-</b></p>
                                 @if (Auth::check())
                                 <form action="/cart" method="POST">
                                  {!! csrf_field() !!}
                                  <input type="hidden" name="id" value="3">
                                  <input type="hidden" name="name" value="Apple iPhone X - 256GB Silver">
                                  <input type="hidden" name="price" value="1259">
                                  <input type="submit" class="btn btn-primary" value="Add to cart"></p>
                                  </form>
                                 @else
                                   <p>Login to add to cart</p>
                                 @endif

          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="card-img-top" style="padding-top: 20px;"><img src="/img/x_silver.jpeg" width="70%"></div>
          <div class="card-body">
            <h4 class="card-title">Apple iPhone X<br>64GB Silver</h4>
            <p></p>
            <p class="card-text">- 64GB of storage<BR>
                                 - 5,8 inch Retina HD screen<BR>
                                 - iOS 11</p>
                                 <p><b>&euro; 1079,-</b></p>
                                 @if (Auth::check())
                                 <form action="/cart" method="POST">
                                  {!! csrf_field() !!}
                                  <input type="hidden" name="id" value="4">
                                  <input type="hidden" name="name" value="Apple iPhone X - 64GB Silver">
                                  <input type="hidden" name="price" value="1079">
                                  <input type="submit" class="btn btn-primary" value="Add to cart"></p>
                                  </form>
                                 @else
                                   <p>Login to add to cart</p>
                                 @endif

          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="card-img-top" style="padding-top: 20px;"><img src="/img/8_black.jpeg" width="70%"></div>
          <div class="card-body">
            <h4 class="card-title">Apple iPhone 8<br>64GB Space Grey</h4>
            <p></p>
            <p class="card-text">- 64GB of storage<BR>
                                 - 4,7 inch Retina HD screen<BR>
                                 - iOS 11</p>
                                 <p><b>&euro; 769,-</b></p>
                                 @if (Auth::check())
                                 <form action="/cart" method="POST">
                                  {!! csrf_field() !!}
                                  <input type="hidden" name="id" value="5">
                                  <input type="hidden" name="name" value="Apple iPhone 8 - 64GB Space Grey">
                                  <input type="hidden" name="price" value="769">
                                  <input type="submit" class="btn btn-primary" value="Add to cart"></p>
                                  </form>
                                 @else
                                   <p>Login to add to cart</p>
                                 @endif

          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="card-img-top" style="padding-top: 20px;"><img src="/img/8_black.jpeg" width="70%"></div>
          <div class="card-body">
            <h4 class="card-title">Apple iPhone 8<br>256GB Space Grey</h4>
            <p></p>
            <p class="card-text">- 256GB of storage<BR>
                                 - 4,7 inch Retina HD screen<BR>
                                 - iOS 11</p>
                                 <p><b>&euro; 939,-</b></p>
                                 @if (Auth::check())
                                 <form action="/cart" method="POST">
                                  {!! csrf_field() !!}
                                  <input type="hidden" name="id" value="6">
                                  <input type="hidden" name="name" value="Apple iPhone 8 - 256GB Space Grey">
                                  <input type="hidden" name="price" value="939">
                                  <input type="submit" class="btn btn-primary" value="Add to cart"></p>
                                  </form>
                                 @else
                                   <p>Login to add to cart</p>
                                 @endif

          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="card-img-top" style="padding-top: 20px;"><img src="/img/8_silver.jpeg" width="70%"></div>
          <div class="card-body">
            <h4 class="card-title">Apple iPhone 8<br>64GB Silver</h4>
            <p></p>
            <p class="card-text">- 64GB of storage<BR>
                                 - 4,7 inch Retina HD screen<BR>
                                 - iOS 11</p>
                                 <p><b>&euro; 759,-</b></p>
                                 @if (Auth::check())
                                 <form action="/cart" method="POST">
                                  {!! csrf_field() !!}
                                  <input type="hidden" name="id" value="7">
                                  <input type="hidden" name="name" value="Apple iPhone 8 - 64GB Silver">
                                  <input type="hidden" name="price" value="759">
                                  <input type="submit" class="btn btn-primary" value="Add to cart"></p>
                                  </form>
                                 @else
                                   <p>Login to add to cart</p>
                                 @endif

          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="card-img-top" style="padding-top: 20px;"><img src="/img/8_silver.jpeg" width="70%"></div>
          <div class="card-body">
            <h4 class="card-title">Apple iPhone 8<br>256GB Silver</h4>
            <p></p>
            <p class="card-text">- 256GB of storage<BR>
                                 - 4,7 inch Retina HD screen<BR>
                                 - iOS 11</p>
                                 <p><b>&euro; 939,-</b></p>
                                 @if (Auth::check())
                                 <form action="/cart" method="POST">
                                  {!! csrf_field() !!}
                                  <input type="hidden" name="id" value="8">
                                  <input type="hidden" name="name" value="Apple iPhone 8 - 256GB Silver">
                                  <input type="hidden" name="price" value="939">
                                  <input type="submit" class="btn btn-primary" value="Add to cart"></p>
                                  </form>
                                 @else
                                   <p>Login to add to cart</p>
                                 @endif

          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="card-img-top" style="padding-top: 20px;"><img src="/img/8_gold.jpeg" width="70%"></div>
          <div class="card-body">
            <h4 class="card-title">Apple iPhone 8<br>64GB Gold</h4>
            <p></p>
            <p class="card-text">- 64GB of storage<BR>
                                 - 4,7 inch Retina HD screen<BR>
                                 - iOS 11</p>
                                 <p><b>&euro; 759,-</b></p>
                                 @if (Auth::check())
                                 <form action="/cart" method="POST">
                                  {!! csrf_field() !!}
                                  <input type="hidden" name="id" value="9">
                                  <input type="hidden" name="name" value="Apple iPhone 8 - 64GB Gold">
                                  <input type="hidden" name="price" value="759">
                                  <input type="submit" class="btn btn-primary" value="Add to cart"></p>
                                  </form>
                                 @else
                                   <p>Login to add to cart</p>
                                 @endif

          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="card-img-top" style="padding-top: 20px;"><img src="/img/8_gold.jpeg" width="70%"></div>
          <div class="card-body">
            <h4 class="card-title">Apple iPhone 8<br>256GB Gold</h4>
            <p></p>
            <p class="card-text">- 256GB of storage<BR>
                                 - 4,7 inch Retina HD screen<BR>
                                 - iOS 11</p>
                                 <p><b>&euro; 939,-</b></p>
                                 @if (Auth::check())
                                 <form action="/cart" method="POST">
                                  {!! csrf_field() !!}
                                  <input type="hidden" name="id" value="10">
                                  <input type="hidden" name="name" value="Apple iPhone 8 - 256GB Gold">
                                  <input type="hidden" name="price" value="939">
                                  <input type="submit" class="btn btn-primary" value="Add to cart"></p>
                                  </form>
                                 @else
                                   <p>Login to add to cart</p>
                                 @endif

          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="card-img-top" style="padding-top: 20px;"><img src="/img/8_red.jpeg" width="70%"></div>
          <div class="card-body">
            <h4 class="card-title">Apple iPhone 8<br>64GB Red</h4>
            <p></p>
            <p class="card-text">- 64GB of storage<BR>
                                 - 4,7 inch Retina HD screen<BR>
                                 - iOS 11</p>
                                 <p><b>&euro; 759,-</b></p>
                                 @if (Auth::check())
                                 <form action="/cart" method="POST">
                                  {!! csrf_field() !!}
                                  <input type="hidden" name="id" value="11">
                                  <input type="hidden" name="name" value="Apple iPhone 8 - 64GB Red">
                                  <input type="hidden" name="price" value="759">
                                  <input type="submit" class="btn btn-primary" value="Add to cart"></p>
                                  </form>
                                 @else
                                   <p>Login to add to cart</p>
                                 @endif

          </div>
        </div>
      </div>
      <div class="col-lg-4 col-md-12 mb-4">
        <div class="card">
          <div class="card-img-top" style="padding-top: 20px;"><img src="/img/8_red.jpeg" width="70%"></div>
          <div class="card-body">
            <h4 class="card-title">Apple iPhone 8<br>256GB Red</h4>
            <p></p>
            <p class="card-text">- 256GB of storage<BR>
                                 - 4,7 inch Retina HD screen<BR>
                                 - iOS 11</p>
                                 <p><b>&euro; 939,-</b></p>
                                 @if (Auth::check())
                                 <form action="/cart" method="POST">
                                  {!! csrf_field() !!}
                                  <input type="hidden" name="id" value="10">
                                  <input type="hidden" name="name" value="Apple iPhone 8 - 256GB Red">
                                  <input type="hidden" name="price" value="939">
                                  <input type="submit" class="btn btn-primary" value="Add to cart"></p>
                                  </form>
                                 @else
                                   <p>Login to add to cart</p>
                                 @endif

          </div>
        </div>
      </div>
  </fieldset>
</div>
@endsection
