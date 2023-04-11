@extends('layout')

@section('title', $product["name"])

@section('cards')
    <h1 style="margin-left: 3vw">Selected product:</h1>
    <div class="card p-2 text-center" style="width: 50vw; margin-left: 3vw; border: solid black;
        @if ($product["status"] == 'R')
            background-color: silver
        @elseif ($product["status"] == 'SR')
            background-color: gold
        @elseif ($product["status"] == 'SSR')
            background-color: red
        @endif">
        <h1>{{ $product["name"] }}</h1>
        <img class="rounded mx-auto d-block" style="width: 80%; height: 30%" src="{{asset('img/'. $product["image"]) }}" alt="">
        <p>Desc: {{ $product["desc"] }}</p>
        <h3>Status: {{ $product["status"] }}</h3>
        <h4>Price: Rp{{ $product["price"] }}</h4>
    </div>
@endsection
