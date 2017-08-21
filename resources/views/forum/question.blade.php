@extends('layouts.forum')

@section('main-content')
<div class="single-post">
	<div id="votecounter" value="{{ $question->id }}">
		<form action="/question/{{$question->id}}/vote" method="post">
			{{ csrf_field() }}
			<input type="submit" value="Votes">
		</form>
		<p>{{$question->vote_count}}</p>
	</div>
	<h2 class="post-title">{{ $question->title }}</h2>
	<p class="description">{{ $question->description }}</p>
	@if($question->answers->isEmpty())
	<div class="single-post-footer">
		<div class="answer">
			<p>No answer yet</p>
		</div>
	</div>
	@endif
	@foreach($question->answers as $answer)
	<div class="single-post-footer">
		<div class="answer">
			<p>{{ $answer->description }}</p>
			@if($answer->user->id == $authid)
			<span id="actions">
				<a class="ansedit" href="{{ url('answer/'.$answer->id.'/edit') }}">Edit</a> |
				<a class="ansdelete" href="{{ url('answer/'.$answer->id.'/delete') }}">Delete</a>
				
			</span>
			@endif
			<div class="answer-by"><span>Answer by : </span>{{ $answer->user->name }}</div>
		</div>
	</div>
	@endforeach
	<div class="comment">
		<h3>Add you answer</h3>
		<form action="{{url('/question/'.$question->id.'/answer')}}" method="post">
			{{ csrf_field() }}
			<textarea name="answer" id="" cols="80" rows="10" required=""></textarea>
			<br>
			<input type="submit" value="submit" name="submitAnswer">
		</form>
	</div>
</div>
@endsection