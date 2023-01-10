@extends('layouts.app')

@section('content')
<!-- current series -->
<div class="current_series pt-5 pb-4">
    <div class="container">
        <div class="row row-cols-6 g-3">
            @foreach($comics as $comic)
            <div class="col">
                <a href="{{route('guest.comics.show', $comic->id)}}">
                    <a href="{{Route('comics.show', $comic->id)}}">
                        <div class="card border-0 rounded-0 text-uppercase">
                            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}" class="my-2">
                            {{ $comic['series'] }}
                        </div>
                    </a>
                </a>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection