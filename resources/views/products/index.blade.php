@extends('layouts.app')

@section('content')

<form method="get" action="{{ route('products.index')}}">
    <div class="form-group">
        <label for="categoreis">Category</label>
        <select class="form-control" id="categoreis" name="category">
            @foreach ($categories as $category)
            <option value="{{ $category->id}}">{{ $category->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <select class="form-control" name="sort">
            @foreach ($sort as $key => $value)
                <option value="{{ $value }}">{{ $key }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">Search</button>
    </div>
</form>

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