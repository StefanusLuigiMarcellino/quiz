@extends('layout')

@section('title', $product["name"])

@section('cards')
    <h1>Selected product:</h1>
    <div class="card" style="border: solid black;
        @if ($product["status"] == 'R')
            background-color: silver
        @elseif ($product["status"] == 'SR')
            background-color: gold
        @elseif ($product["status"] == 'SSR')
            background-color: red
        @endif">
        <h1>Product name: {{ $product["name"] }}</h1>
        <h4>Product desc: {{ $product["desc"] }}</h4>
        <h3>Product status: {{ $product["status"] }}</h3>
        <h4>Product price: Rp{{ $product["price"] }}</h4>
    </div>
@endsection
