@extends('layout.app')

@section('content')

<div class="container">
    <div class="d-flex">
        <img src="{{ $comic->thumb }}" alt="{{ $comic->title }} image">
        <div class="details">
            <h1>{{ $comic->title }}</h1>
            <ul>
                <li>{{ $comic->description }}</li>
                <li>€ {{ $comic->price }}</li>
                <li>{{ $comic->series }}</li>
                <li>{{ $comic->sale_date }}</li>
                <li>{{ $comic->type }}</li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-6 g-4">
        @forelse($comics as $comic)
        <div class="col">
            <a href="{{ route('comics.show'), $comics->id }}">
                <div class="card" style="width: 18rem;">
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title image}}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <ul>
                            <li class="card-text">{{ $comic->price }}</li>
                        </ul>
                        <a href="{{ route('guest.comics.show'), $comic->id }}" class="btn btn-primary">Go to Details</a>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

@endsection