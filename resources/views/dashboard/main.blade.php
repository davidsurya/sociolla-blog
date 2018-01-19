<!DOCTYPE html>
<html lang="en">
<head>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sociolla Blog App | Dashboard</title>
    <link type="text/css" href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/bootstrap-responsive.min.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('css/theme.css') }}" rel="stylesheet">
    <link type="text/css" href="{{ asset('images/icons/css/font-awesome.css') }}" rel="stylesheet">
    <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
    rel='stylesheet'>
    @yield('custom-css')
  </head>
  <body>
    @include('dashboard.partials.nav-header')

    <div class="wrapper" style="min-height: 500px;">
      <div class="container">
        <div class="row">
          <div class="span3">
            @include('dashboard.partials.sidebar')
          </div>

          <div class="span9">
            <div class="content">
              @yield('content')
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('dashboard.partials.footer')

    <script src="{{ asset('scripts/jquery-1.9.1.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('scripts/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script>
    <script src="https://getbootstrap.com/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="{{ asset('scripts/flot/jquery.flot.js') }}" type="text/javascript"></script>
    <script src="{{ asset('scripts/flot/jquery.flot.resize.js') }}" type="text/javascript"></script>
    <script src="{{ asset('scripts/common.js') }}" type="text/javascript"></script>
    @yield('custom-js')
</body>
</html>