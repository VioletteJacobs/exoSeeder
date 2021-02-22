@extends('template.main')
@section('content')
    <h1>Les personnes</h1>
    <div class="container">
        <form action="/delete_all" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">
                Delete All
            </button>
        
        </form>
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
                    <a href="/edit_people/{{$item -> id}}" class="btn btn-success">Edit</a>
                    </div>
                </div>
        
    @endforeach
    </div>

@endsection