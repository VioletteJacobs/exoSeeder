@extends('template.main')
@section('content')
    <h1>Les personnes</h1>
    <div class="container">

            @foreach ($DBPeople as $item)
                <div class="card " style="width: 18rem;">
                    <div class="card-body">
                    <h5 class="card-title">{{$item -> name}}</h5>
                    <h5 class="card-title">{{$item -> age}}</h5>
                    <form action="/delete_people/{{$item ->id}}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-danger">
                            Delete
                        </button>
                    </form>
                    <a href="/show_people/{{$item -> id}}" class="btn btn-primary">Shooow</a>
                    </div>
                </div>
        
    @endforeach
    </div>

@endsection