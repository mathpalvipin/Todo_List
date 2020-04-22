@extends('layout.app')


@section('content')

<div class="card m-2 text-center" >
	 <span class="badge " style="background-color: yellow ; font-size: 2vw;"> {{$todo->due}} </span>


	<h2><a href="Todo/{{$todo->id}}"   style="text-transform: capitalize;">{{$todo->title}}</a></h2>
	<h3 style="text-transform: capitalize; font-size: 1.5vw;">{{$todo->content}}</h3>
    





</div>



@endsection