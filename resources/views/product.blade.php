@extends('layout')

@section('title', "List all products")

@section('cards')
    <h1>Products Lists:</h1>
    @foreach ($listproduct as $product)
        <div class="row" style="margin-top:10px">
            <a href="detail/{{ $product['id'] }}" style="text-decoration: none; color: black;">
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
            </a>
        </div>
    @endforeach
@endsection
