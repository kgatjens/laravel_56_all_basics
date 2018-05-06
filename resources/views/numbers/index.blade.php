<h2>Numbers</h2>

<a href="{{route('anum')}}">go to number 1</a>
<a href="{{action('NumbersController@anyNumber2')}}">go to number 2</a>


<ul>
	@foreach($numbers as $number)
		<p>{{$number}}</p>
	@endforeach
</ul>

<h2>This is a form</h2>
<form action="{{url('/receive')}}" method="POST">
	<p><label for="name">Name:</label>
	<input type="text" name="name"/></p>

	<p><label for="description">Description:</label>
	<textarea name="name"></textarea></p>

	<input type="submit" name="Send">
</form>