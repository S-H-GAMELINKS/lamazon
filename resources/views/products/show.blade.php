    {{$product->name}}
    {{$product->description}}
    {{$product->price}}

@foreach($reviews as $review)
    {{$review->content}}
@endforeach

{{Form::open(['route' => ['products.reviews.store', $product]])}}
    {{Form::textarea('content')}}
    {{Form::submit('Create')}}
{{Form::close()}}

<a href="{{route('products.edit', $product)}}">Edit</a>