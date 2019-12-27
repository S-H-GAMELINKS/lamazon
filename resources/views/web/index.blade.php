@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Welcome to Lamazon!</h1>
        <p class="lead">This is a simple Amazon like service</p>
        <hr class="my-4">
        <a class="btn btn-primary btn-lg" href="{{route('products.index')}}" role="button">Show Products</a>
    </div>
@endsection