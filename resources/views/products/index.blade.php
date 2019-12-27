@extends('layouts.app')

@section('content')

    <div class="row d-flex justify-content-center">
        @foreach ($products as $product)
            <div class="card col-3 m-3">
                <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text">{{$product->description}}</p>
                    <a href="{{route('products.show', $product)}}" class="btn btn-primary">Show Product</a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="d-flex justify-content-center">
        {{ $products->links() }}
    </div>
    
    <a href="{{route('products.create')}}">New</a>
@endsection