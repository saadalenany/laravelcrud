@extends('layouts.app')

@section('content')

  <div class="container">

    <h2>{{ $page->title }}</h2>

    <div>
      Posted by {{ $page->name }}
      <time class="timeago" datetime="{{ $page->updated_at->toIso8601String() }}"
            title="{{ $page->updated_at->toDayDateTimeString() }}">
        {{ $page->updated_at->diffForHumans() }}
      </time>
    </div>

	<script src="{{asset('js/getvideo.js')}}"></script>

	<br>
    <hr>
	<div>
		<iframe id="video_url" width="100%" height="500" src="{{ $page->url }}">
		</iframe>
	</div>
	<br>
    <hr>

    <div>
      {!! $page->content !!}
    </div>

  </div>

@endsection
