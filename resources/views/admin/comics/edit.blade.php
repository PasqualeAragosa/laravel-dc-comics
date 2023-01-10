@extends('layouts.app')

@section('content')
<div class="container pt-3 pb-4">

    @include('partials.errors');


    <form action="{{route('comics.update', $comic->id)}}" method="post">
        @csrf
        @method('put')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title', $comic->title)}}">
        </div>
        @error('title')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="description" rows="4">{{old('description', $comic->description)}}</textarea>
        </div>
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label>
            <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" value="{{old('thumb', $comic->thumb)}}">
        </div>
        @error('thumb')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" step="0.01" name="price" id="price" class="form-control @error('price') is-invalid @enderror" value="{{old('price', $comic->price)}}">
        </div>
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" name="series" id="series" class="form-control @error('series') is-invalid @enderror" value="{{old('series', $comic->series)}}">
        </div>
        @error('series')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale date</label>
            <input type="date" name="sale_date" id="sale_date" class="form-control @error('sale_date') is-invalid @enderror" value="{{old('sale_date', $comic->sale_date)}}">
        </div>
        @error('sale_date')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" name="type" id="type" class="form-control @error('type') is-invalid @enderror" value="{{old('type', $comic->type)}}">
        </div>
        @error('type')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection