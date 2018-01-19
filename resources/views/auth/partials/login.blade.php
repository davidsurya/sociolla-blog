@extends('auth.main')

@section('content')

  <form class="form-signin" action="{{ url('login') }}" method="POST">
    <h2 class="form-signin-heading title"><center>Sign in first</center></h2>
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    
    <div class="form-group">
      {{-- <label for="username" class="col-sm-2 col-md-6 control-label">Username</label> --}}
      <div class="col-sm-12 col-md-12">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
          <input type="email" class="form-control" name="email" id="email"  placeholder="Enter your email" required autofocus />
        </div>
      </div>
    </div>
    
    <div class="form-group">
      {{-- <label for="password" class="col-sm-2 col-md-6 control-label">Password</label> --}}
      <div class="col-sm-12 col-md-12">
        <div class="input-group">
          <span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
          <input type="password" class="form-control" name="password" id="password" placeholder="Enter your password" required />
        </div>
      </div>
    </div>
    
    <div class="form-group col-md-12">
      <div class="checkbox">
        <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label>
      </div>
      <button class="btn btn-md btn-primary btn-block" style="border-radius: 0px;" type="submit">Sign in</button>
      <a href="{{ url('register') }}" class="btn btn-md btn-success btn-block" style="border-radius: 0px;">Sign Up</a>
    </div>
  </form>

@endsection