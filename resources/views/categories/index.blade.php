@foreach($categories as $category)
    {{$category->name}}
    {{$category->description}}
@endforeach

<a href="{{route('categories.create')}}">New</a>