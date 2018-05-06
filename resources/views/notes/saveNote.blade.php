<h2>
@if(!isset($note))
	Create a Note
@else
	Update note
@endif
</h2>

<form action="{{isset($note)?url('/notes/update/'.$note->id):url('/notes/store')}}" method="post">
	<input type="text" name="title" value="{{isset($note)?$note->title:''}}" placeholder="Note title"><br/>
	<textarea name="description" placeholder="Note description" >{{isset($note)?$note->description:''}}</textarea><br/>
	<input type="submit" name="Save">
</form>

<a href="{{url('/notes')}}" >Back to list</a>