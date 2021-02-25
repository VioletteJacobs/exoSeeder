@extends('template.main')
@section('content')
<h1>Rajouter</h1>
@if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
<form action="/add_people" method="post">
    @csrf
    <div class="form-group">
        <label for="exampleInputName">Name : </label>
        <input  class="form-control" value="{{old("name")}}" name="name">
    </div>
    <div class="form-group">
        <label for="exampleInputName">Age : </label>
        <input  class="form-control" value="{{old("age")}}" name="age">
    </div>
    <div class="form-group">
        <label for="exampleInputName">Phone : </label>
        <input  class="form-control" value="{{old("phone")}}" name="phone">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address : </label>
        <input  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old("email")}}" name="email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection