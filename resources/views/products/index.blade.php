@foreach($products as $product)
    {{$product->name}}
    {{$product->description}}
    {{$product->price}}
@endforeach

<a href="{{route('products.create')}}">New</a>