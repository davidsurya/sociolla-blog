@extends('content.main')

@section('content')
  <main role="main" class="container">
    <div class="row">
      <div class="col-sm-8 blog-main">
        <a href="{{ url('dashboard') }}" target="_blank" class="btn btn-success"><i class="menu-icon icon-pencil"></i> Write a blog</a>
        @foreach($posts as $post)
          <div class="blog-post" style="margin-bottom: 0px;">
            <h2 class="blog-post-title">{{ $post->title }}</h2>
            <p class="blog-post-meta">{{ date('d F Y', strtotime($post->created_at)) }} by <a href="#">{{ $post->user()->first()->name }}</a></p>

            <p>{{ $post->body }}</p>

            <p>Tag : 
              @foreach(json_decode($post->tags) as $tag)
                <a href={{ url('tags/'.$tag) }} class="badge badge-warning">{{ $tag }}</a>
              @endforeach
            </p>
          </div>
          <hr>
        @endforeach

        {{-- <nav class="blog-pagination">
          <a class="btn btn-outline-primary" href="#">Older</a>
          <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav> --}}
      </div>

      <aside class="col-sm-3 ml-sm-auto blog-sidebar">
        <div class="sidebar-module">
          <h4>Archives</h4>
          <ol class="list-unstyled">
            @foreach($archive_date as $archive)
              <li><a href="{{ url('archives/'.$archive->date_number) }}">{{ $archive->date_name }}</a></li>
            @endforeach
          </ol>
        </div>
      </aside>
    </div>
  </main>

@endsection