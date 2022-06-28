@extends('layouts.layouts')

@section('title', 'Coffee Board')

@section('content')

<form method="POST" action="/coffees">
    {{ csrf_field() }}
    <input type="text" name="coffee_name">
    <input type="text" name="coffee_place">
    <input type="submit">
</form>
@endsection
