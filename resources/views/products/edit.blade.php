@extends('layouts.app')

@section('content')

{{Form::model($product, ['route' => ['products.update', $product->id], 'method' => 'PUT'])}}
    {{Form::input('text', 'name')}}
    {{Form::textarea('description')}}
    {{Form::number('price', $product->price, ['min' => 0])}}
    {{Form::submit('Create')}}
{{Form::close()}}

@endsection