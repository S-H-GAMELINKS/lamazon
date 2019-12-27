@extends('layouts.app')

@section('content')

@foreach($products as $product)
    {{$product->name}}
    {{$product->description}}
    {{$product->price}}
    {{Form::model($product, ['route' => ['products.destroy', $product->id], 'method' => 'DELETE'])}}
        {{Form::submit('delete')}}
    {{Form::close()}}
@endforeach

<a href="{{route('products.create')}}">New</a>

@endsection