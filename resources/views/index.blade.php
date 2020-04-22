@extends('layout.app')


@section('content')

@if(count($todos)) 
 @foreach ($todos  as $todo )
<div class="card m-2 text-center" >
	 <span class="badge " style="background-color: yellow ; font-size: 2vw;"><?php  $w=explode('-', $todo->due);
$q=array_reverse($w);
$d=implode('-', $q);
 ?>{{$d}} </span>


	<h2><a href="Todo/{{$todo->id}}"   style="text-transform: capitalize;">{{$todo->title}}</a></h2>
	<h3 style="text-transform: capitalize; font-size: 1.5vw;">{{$todo->content}}</h3>
    <div style="display:flex ;margin-bottom: 1vw;">
    	<div style="flex:0.5"></div>
    	<a href="/Todo/{{$todo->id}}/edit" class="btn btn-primary mt-2" style="flex:1">edit</a>
    	<div style="flex:0.5"></div>
     <a href="/Todo/delete/{{$todo->id}}" class="btn btn-danger mt-2 " style="   flex: 1; ">Delete</a>
     <div style="flex:0.5"></div>


</div>


</div>
 @endforeach
@endif
@endsection