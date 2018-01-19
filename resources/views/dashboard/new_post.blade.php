@extends('dashboard.main')

@section('custom-css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')

  <div class="btn-controls">
    <div class="btn-box-row row-fluid">
      <div class="btn-box big span12" style="text-align: left; padding-left: 25px;">
      	<h3>Write something new</h3>
        <form action="{{ url('dashboard/post') }}" method="POST">
        	{{ csrf_field() }}
        	
        	<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
        		<div class="span12">
        			<input id="title" type="text" class="form-control span6" name="title" value="{{ old('title') }}" placeholder="Title" required autofocus>

        			@if ($errors->has('title'))
        			<span class="help-block">
        				<strong>{{ $errors->first('title') }}</strong>
        			</span>
        			@endif
        		</div>
        	</div>

        	<div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
        		<div class="span12">
        			<textarea class="form-control span11" name="body" value="{{ old('body') }}" placeholder="Content" rows="8" required></textarea>

        			@if ($errors->has('title'))
        			<span class="help-block">
        				<strong>{{ $errors->first('title') }}</strong>
        			</span>
        			@endif
        		</div>
        	</div>

        	<div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
        		<div class="span12">
                    <select id="tags" multiple="multiple" name="tags[]"></select>
        			{{-- <input id="tag" type="text" class="form-control span6" name="tag" value="{{ old('tag') }}" placeholder="Tag" required> --}}

        			@if ($errors->has('tag'))
        			<span class="help-block">
        				<strong>{{ $errors->first('tag') }}</strong>
        			</span>
        			@endif
        		</div>
        	</div>

        	<div class="form-group">
        		<button class="btn btn-primary" type="submit">Submit</button>
        	</div>
        </form>
      </div>
    </div>
  </div>

@endsection

@section('custom-js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $('#tags').select2({
            data: {!! $tags !!},
            tags: true,
            tokenSeparators: [','], 
            placeholder: "Add your tags here"
        });
    </script>
@endsection