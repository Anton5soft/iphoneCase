@extends('layouts.scaffold')

@section('main')
<br>
<br>
<h1>Чехлы</h1>
<center>
<div class="caseblock">
@if ($posts->count())
			@foreach ($posts as $post)
    <div class="hero-unit">
					<center><h2>{{{ $post->title }}}</h2></center>
                    <br>
                    {{ $post->content }}
                    <br>
                    {{{ $post->created_at }}}
            </div>
@endforeach
</div>
</div>
</center>
@else
	There are no posts
@endif
@stop
