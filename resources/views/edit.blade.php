@extends('layout.app')

@section('content')



<h1>Edit Todo</h1>
<form method="get" action="/Todo/update/{{$todo->id}}">
	@csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="enter title" value="{{$todo->title}}">
    
  </div>
  <div class="form-group">
    <label for="content">content</label>
    <input type="text" class="form-control"  name="content" id="content" placeholder="enter content" value="{{$todo->content}}">
  </div>
  <div class="form-group">
     <label for="due">Due</label><br>
    <input type="date" name="due" value="{{$todo->due}}">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>








@endsection