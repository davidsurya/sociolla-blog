@extends('auth.main')

@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-12 col-md-6 offset-md-3">
			<center><h1 class="title">Sociolla Blog App</h1></center>

			<form class="form-horizontal" action="{{ url('register') }}" method="POST">

				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="form-group">
					<label for="name" class="col-sm-2 col-md-6 control-label">Your Name</label>
					<div class="col-sm-12 col-md-12">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
							<input type="text" class="form-control" name="name" id="name" placeholder="Enter your Name" required autofocus />
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="email" class="col-sm-2 col-md-6 control-label">Your Email</label>
					<div class="col-sm-12 col-md-12">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
							<input type="text" class="form-control" name="email" id="email" placeholder="Enter your Email" required/>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="username" class="col-sm-2 col-md-6 control-label">Username</label>
					<div class="col-sm-12 col-md-12">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
							<input type="text" class="form-control" name="username" id="username" placeholder="Enter your Username" required/>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="password" class="col-sm-2 col-md-6 control-label">Password</label>
					<div class="col-sm-12 col-md-12">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
							<input type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" required/>
						</div>
					</div>
				</div>

				<div class="form-group">
					<label for="confirm" class="col-sm-2 col-md-6 control-label">Confirm Password</label>
					<div class="col-sm-12 col-md-12">
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
							<input type="password" class="form-control" name="confirm" id="confirm" placeholder="Confirm your Password" required/>
						</div>
					</div>
				</div>

				<div class="form-group col-md-8 offset-md-2">
					<center>
						<button type="submit" class="btn btn-success btn-md btn-block" style="border-radius: 0px;">Register</button>
						Already have an account ? <a href="{{ url('login') }}">Login</a>
					</center>
				</div>

			</form>
		</div>
	</div>
</div>

@endsection