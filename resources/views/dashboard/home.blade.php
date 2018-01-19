@extends('dashboard.main')

@section('content')

  <div class="btn-controls">
    <div class="btn-box-row row-fluid">
      <a href="#" class="btn-box big span4">
        <i class="icon-pencil"></i>
        <p class="text-muted">Your Post</p>
        <b>{{ $my_post_total }}</b>
      </a>
    </div>
  </div>

@endsection