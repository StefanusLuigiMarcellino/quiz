@extends('layout')

@section('title', "List all products")

@section('cards')
    <h1 style="margin-left: 3vw">Products Lists:</h1>
    @foreach ($listproduct as $product)
        <div class="row" style="margin-top: 1vw; margin-left: 3vw; width: 50vw">
            <a href="detail/{{ $product['id'] }}" style="text-decoration: none; color: black;">
                <div class="card p-2 text-center" style="width: 50vw; border: solid black;
                    @if ($product["status"] == 'R')
                        background-color: silver
                    @elseif ($product["status"] == 'SR')
                        background-color: gold
                    @elseif ($product["status"] == 'SSR')
                        background-color: red
                    @endif">
                    <h1>{{ $product["name"] }}</h1>
                    <img class="rounded mx-auto d-block" style="width: 80%; height: 30%" src="img/{{ $product["id"] }}.jpg" alt="">
                    <p>Desc: {{ $product["desc"] }}</p>
                    <h3>Status: {{ $product["status"] }}</h3>
                    <h4>Price: Rp{{ $product["price"] }}</h4>
                </div>
            </a>
        </div>
    @endforeach
@endsection
