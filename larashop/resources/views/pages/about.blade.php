@extends('app')


@section('content')
<h2>About</h2>

@if($people)
<h3>People I like:</h3>

<ul>
	@foreach($people as $person)

	<li>{{$person}}</li>
	@endforeach


</ul>
@endif

<p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repudiandae libero nam incidunt deleniti, cupiditate omnis veritatis enim iste minima fugiat illo reprehenderit debitis officia, provident nostrum saepe, praesentium ea ipsa.
</p>
@stop

