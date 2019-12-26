    {{$product->name}}
    {{$product->description}}
    {{$product->price}}

<a href="{{route('products.edit', $product)}}">Edit</a>