@extends('layouts.app')

@section('content')
<div class="container">

  <!-- Jumbotron Header -->
  <header class="jumbotron" style="height: 200px; margin-top: 2rem; margin-bottom: 2rem; background: url(img/login.png); background-size: 100% 100%; background-position: center;">
  </header>


  <form method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    <fieldset>
      <legend>Login form</legend>
      <p style="color: #48ab6c; font-size: 24px;"><i class="fa fa-lock"></i> THIS FORM IS SECURED AND ENCRYPTED</p>
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email">Email</label>
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Enter your email" ria-describedby="emailHelp" required autofocus>
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>

        @if ($errors->has('email'))
        <span class="help-block">
          <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
      </div>

      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        <label for="password">Password</label>
        <input id="password" type="password" class="form-control" name="password" required>

        @if ($errors->has('password'))
        <span class="help-block">
          <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
      </div>

      <div class="form-group">
        <div class="checkbox">
          <label>
            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
          </label>
        </div>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">
          Login
        </button>
      </div>
    </fieldset>
  </form>
</div>
@endsection
