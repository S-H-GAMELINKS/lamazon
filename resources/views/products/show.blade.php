@extends('layouts.app')

@section('content')

    <h1 class="display-3">Product Name: {{$product->name}}</h1>
    <p class="display-4">{{$product->description}}</p>
    <p class="display-4">Price: {{$product->price}}</p>
    <p class="display-4">Category: {{$product->category->name}}</p>

    @auth
    <div class="m-3">
        @if($product->isFavoritedBy(Auth::user()))
            {{Form::open(['route' => ['products.fav', $product]])}}
                {{Form::submit('UnFav', ['class' => 'btn btn-danger'])}}
            {{Form::close()}}
        @else
            {{Form::open(['route' => ['products.fav', $product]])}}
                {{Form::submit('Fav', ['class' => 'btn btn-primary'])}}
            {{Form::close()}}
        @endif
    </div>

    <div class="m-3">
        {{Form::open(['route' => 'carts.store'])}}
            {{Form::hidden('id', $product->id)}}
            {{Form::hidden('name', $product->name)}}
            {{Form::hidden('qty', 1)}}
            {{Form::hidden('price', $product->price)}}
            {{Form::hidden('weight', 0)}}
            {{Form::submit('Add', ['class' => 'btn btn-primary'])}}
        {{Form::close()}}
    </div>
    @endauth

    @foreach($reviews as $review)
        <div class="m-2">
            <p>{{$review->content}}</p>
        </div>
    @endforeach

    @auth
    <div class="m-3">
    {{Form::open(['route' => ['products.reviews.store', $product]])}}
        <div class="m-2">
            {{Form::textarea('content', "", ['class' => 'form-control'])}}
        </div>
        {{Form::submit('Create', ['class' => 'btn btn-primary'])}}
    {{Form::close()}}
    </div>
    @endauth

<a href="{{route('products.edit', $product)}}">Edit</a>

@endsection