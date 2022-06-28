@extends('layouts.layouts')

@section('title', 'Coffee Board')

@section('content')

    @if (session('message'))
        {{ session('message') }}
    @endif

<h1>Coffee</h1>

@foreach($coffees as $coffee)
    <a href="/coffees/{{ $coffee->id }}">{{ $coffee->coffee_name }}</a>
    <a href="/coffees/{{ $coffee->id }}/edit">Edit</a>
    
    <form action="/coffees/{{ $coffee->id }}" method="POST" onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <button type="submit">Delete</button>
    </form>
    
@endforeach

<a href="/coffees/create">New Coffee</a>

@endsection

