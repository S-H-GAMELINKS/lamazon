@extends('layouts.app')

@section('content')
    {{$product->name}}
    {{$product->description}}
    {{$product->price}}
    {{$product->category->name}}

@if($product->isFavoritedBy(Auth::user()))
    {{Form::open(['route' => ['products.fav', $product]])}}
        {{Form::submit('UnFav')}}
    {{Form::close()}}
@else
    {{Form::open(['route' => ['products.fav', $product]])}}
        {{Form::submit('Fav')}}
    {{Form::close()}}
@endif

{{Form::open(['route' => 'carts.store'])}}
    {{Form::hidden('id', $product->id)}}
    {{Form::hidden('name', $product->name)}}
    {{Form::hidden('qty', 1)}}
    {{Form::hidden('price', $product->price)}}
    {{Form::hidden('weight', 0)}}
    {{Form::submit('Add')}}
{{Form::close()}}

@foreach($reviews as $review)
    {{$review->content}}
@endforeach

{{Form::open(['route' => ['products.reviews.store', $product]])}}
    {{Form::textarea('content')}}
    {{Form::submit('Create')}}
{{Form::close()}}

<a href="{{route('products.edit', $product)}}">Edit</a>

@endsection