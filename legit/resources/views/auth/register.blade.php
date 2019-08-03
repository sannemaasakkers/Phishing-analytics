@extends('layouts.app')

@section('content')
<div class="container">

  <!-- Jumbotron Header -->
  <header class="jumbotron" style="height: 200px; margin-top: 2rem; margin-bottom: 2rem; background: url(img/login.png); background-size: 100% 100%; background-position: center;">
  </header>
  <form method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}
    <fieldset>
      <legend>Register</legend>

      <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        <label for="name">Name</label>
        <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

        @if ($errors->has('name'))
        <span class="help-block">
          <strong>{{ $errors->first('name') }}</strong>
        </span>
        @endif
      </div>

      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        <label for="email">Email</label>
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

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
        <label for="password-confirm">Confirm Password</label>
        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
      </div>

      <div class="form-group">
        <button type="submit" class="btn btn-primary">
          Register
        </button>
      </div>
    </fieldset>
  </form>
</div>
@endsection
