@extends('layouts.layouts')

@section('title', 'Coffee Board')

@section('content')

@if (session('message'))
        {{ session('message') }}
@endif

{{ $coffee->coffee_name }}
{{ $coffee->coffee_place }} 
    
<a href="/coffees/{{ $coffee->id }}/edit">Edit</a>
@endsection
