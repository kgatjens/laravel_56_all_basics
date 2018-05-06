<h3>Notes list</h3>

@if(session('status'))
	{{session('status')}}
@endif

<a href="{{url('notes/save-note')}}">Add note</a> 


<ul>
	@foreach($notes as $note)
		<li>{{$note->title}}<br/>
		<a href='notes/note/{{$note->id}}'>See</a> | 
		<a href='notes/update-note/{{$note->id}}'>Edit</a> | 
		<a href='notes/delete-note/{{$note->id}}'>Delete</a>
		</li>
	@endforeach
</ul>