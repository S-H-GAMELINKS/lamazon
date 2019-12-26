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

@foreach($reviews as $review)
    {{$review->content}}
@endforeach

{{Form::open(['route' => ['products.reviews.store', $product]])}}
    {{Form::textarea('content')}}
    {{Form::submit('Create')}}
{{Form::close()}}

<a href="{{route('products.edit', $product)}}">Edit</a>