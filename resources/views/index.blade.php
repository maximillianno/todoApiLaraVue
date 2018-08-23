@extends('layouts.app')

@section('content')
    <h3>Welcome to Chatty</h3>
    <p>The best social network!</p>
@foreach ($products as $product)
    <p>{{ $product->name }}</p>
@endforeach


@endsection
