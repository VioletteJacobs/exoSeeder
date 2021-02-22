@extends('template.main')
@section('content')
<h1>Rajouter</h1>
<form action="/add_people" method="post">
    @csrf
    <div class="form-group">
        <label for="exampleInputName">Name : </label>
        <input type="email" class="form-control" name="name">
    </div>
    <div class="form-group">
        <label for="exampleInputName">Age : </label>
        <input type="email" class="form-control" name="age">
    </div>
    <div class="form-group">
        <label for="exampleInputName">Phone : </label>
        <input type="email" class="form-control" name="phone">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Email address : </label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      </div>
    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection