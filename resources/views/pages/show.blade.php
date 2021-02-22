@extends('template.main')
@section('content')
<div class="container">
    <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title">{{$show->name}}</h5>
          <p class="card-text">{{$show ->age}}</p>
          <p class="card-text">{{$show ->phone}}</p>
          <p class="card-text">{{$show ->email}}</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
</div>
@endsection