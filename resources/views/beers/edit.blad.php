@extends('layouts.layouts')

@section('title', 'Beer Board')

@section('content')

<h1>Editing Beer</h1>

<form method="POST" action="/beers/{{ $beer->id }}">
    {{ csrf_field() }}
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group">
        <label for="exampleInputEmail1">Title</label>
        <input type="text" class="form-control" aria-describedby="emailHelp" name="beer_name" value="{{ $beer->beer_name }}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Content</label>
        <textarea class="form-control" name="beer_taste">{{ $beer->beer_taste }}</textarea>
    </div>
    <button type="submit" class="btn btn-outline-primary">Submit</button>
</form>

<a href="/beers/{{ $beer->id }}">Show</a> | 
<a href="/beers">Back</a>

@endsection
