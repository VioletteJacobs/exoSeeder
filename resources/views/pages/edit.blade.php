@extends('template.main')
@section('content')
<form action="/update_people/{{$edit -> id}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="example">Name : </label>
      <input class="form-control" name="name" value="{{$edit->name}}">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email : </label>
        <input type="email" class="form-control" name="email" value="{{$edit->email}}">
      </div>
      <div class="form-group">
        <label for="example">Phone: </label>
        <input  class="form-control" name="phone" value="{{$edit->phone}}">
      </div>
      <div class="form-group">
        <label for="example">Age: </label>
        <input  class="form-control" name="age" value="{{$edit->age}}">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection