@extends('layouts.app')

@section('content')

<div class="row d-flex justify-content-center">
    @foreach ($cart as $product)
    <div class="card col-3 m-3">
        <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <p class="card-text">Price :{{$product->price}}  Quantity: {{$product->qty}}</p>
            @if ($product->options->carriage)
                <p class="card-text">SubTotal: {{$product->subtotal + 800 * $product->qty}}</p>
            @else
                <p class="card-text">SubTotal: {{$product->subtotal}}</p>
            @endif
        </div>
    </div>
    @endforeach
</div>

{{Form::open(['route' => 'carts.destroy', 'method' => 'DELETE'])}}
    {{Form::submit('Buy', ['class' => 'btn btn-danger', 'onClick' => 'confirm("Are you sure?")'])}}
{{Form::close()}}

@endsection