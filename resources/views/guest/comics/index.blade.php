@extends('layout.app')

@section('content')
<h1>All Comics Here</h1>

<div class="container">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4 row-cols-lg-6 g-4">
        @forelse($comics as $comic)
        <div class="col">
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
        </div>
    </div>
</div>

@endsection