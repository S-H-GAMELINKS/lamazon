@extends('layouts.app')

@section('content')

{{$category->name}}
{{$category->description}}

<a href="{{route('categories.edit', $category)}}">edit</a>

@endsection