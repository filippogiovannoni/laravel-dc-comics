@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card" style="width:18rem;">
            <img src="{{ $comic->img_url }}" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted ">{{ $comic->price }}€</h6>
                <h6 class="card-subtitle mb-2 text-muted ">{{ $comic->category }}</h6>
                <p class="card-text">{{ $comic->description }}</p>
            </div>
        </div>
    </div>
@endsection
