@extends('layouts.forum')

@section('main-content')
@foreach($tagquestions as $question)
<div class="post">
<a href="{{url('/question/'.$question->id)}}"><h2 class="post-title"> {{ $question->title }}</h2></a>
	<p class="description">{{ $question->description }}</p>
	<p class="description" style="font-weight:bold">asked :   1 month ago</p>
	<div class="post-footer">
		<span class="asked"><span style="color:white">Asked by :</span>{{ $question->user->name }}</span>
		<span id="repliescount"><a href="{{url('/question/'.$question->id)}}">{{ $question->answers->count() }} Replies</a></span>
		<div class="categories">
			<ul class="cats">
				@foreach($question->tags as $tag)
				<li><a href="{{ url('tag/'.$tag->id.'/questions') }}">{{ $tag->tag_name }}</a></li>
				@endforeach
			</ul>
		</div>
	</div>
</div>
@endforeach
@endsection