@extends('layouts.forum')

@section('main-content')

<form method="post" action="{{ url('answer/'.$answer->id.'/update') }}">
	{{ csrf_field() }}
	<textarea name="description" cols="50" rows="10">
		{{ $answer->description }}
	</textarea>
	<br>
	<input type="submit" value="Update">
	<br>
	<br>
</form>
@endsection