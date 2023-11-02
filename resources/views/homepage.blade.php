@extends('layout.app')

@section('content')

@foreach($comics as $comic)
<div class="block_jumbo">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{$comic->thumb}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{$comic->title}}</h5>
                        <p class="card-text">{{$comic->description}}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$comic->price}} €</li>
                        <li class="list-group-item">{{$comic->type}}</li>
                        <li class="list-group-item">{{$comic->series}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

</div>
@endforeach
@endsection