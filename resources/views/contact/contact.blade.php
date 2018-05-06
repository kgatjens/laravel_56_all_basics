{{-- this is a php comment--}}

@include('contact.header', array('header_name'=>'name1'))

<h4>Contact View {{$name}},  {{$age}}</h4>
<?php 
echo "<pre>";
print_r($name);
print_r($age);
?>

<h4>Contact View {!!$name!!},  {{-- isset($age) && !is_null($age) ? $age : 'Does not exist!' --}}</h4>

@if(is_null($age))
	does not exist
@else
	nice age {{$age}}
@endif

<p>
<?php $number = 6?>
Table from {{$number}}
</p>

@for($i=1;$i<=10;$i++)
	{{$i.' x 2 ='.($i*$number)}}<br/>
@endfor

{{$f = 1}}
@while($f<=7)
	<p>{{'Hi there '.$f}}</p>
	<?php $f++;?>
@endwhile

<h2>Numbers</h2>
@foreach($numbers as $number)
	<p>{{$number}}</p>
@endforeach

