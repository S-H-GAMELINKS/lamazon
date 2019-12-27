@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Welcome to Lamazon!</h1>
        <p class="lead">This is a simple Amazon like service</p>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="{{route('products.index')}}" role="button">Show Products</a>
    </div>

    <h2 class="text-center">Recently Products</h2>

    <div class="row">
        @foreach ($recentProducts as $product)
            <div class="card col-3 m-3">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text">{{$product->description}}</p>
                    <a href="{{route('products.show', $product)}}" class="btn btn-primary">Show Product</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection