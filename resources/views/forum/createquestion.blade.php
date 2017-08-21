@extends('layouts.forum')
@section('main-content')
<div class="reg-form">
	<form action="{{ url('/question') }}" method="post">
	 		{{ csrf_field() }}
		<label for="title">Title: </label><br><input type="text" name="title" required=""><br>
		<br><label for="description">Description:</label> <br><textarea id="description" name="description" cols="55" rows="10" required=""></textarea><br>
		<br><label for="category">Category:</label> <br><br><input type="text" id="tags" name="tags" placeholder="Max 3 tags separated by commas" class="tagit-hidden-field">
	<br>
		<input type="submit" value="Post Question" name="submitquestion">
	</form>
</div>
@endsection