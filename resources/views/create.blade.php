@extends('layout.app')

@section('content')




<form method="post" action="/Todo/store">
	@csrf
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" class="form-control" name="title" id="title" placeholder="enter title" value="{{old('title')}}">
    
  </div>
  <div class="form-group">
    <label for="content">content</label>
    <input type="text" class="form-control"  name="content" id="content" placeholder="enter content" value="{{old('content')}}">
  </div>
  <div class="form-group">
    <label for="due">Due</label> <br>
    <input type="date" name="due"></div>
     
 
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>








@endsection