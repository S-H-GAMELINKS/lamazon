@extends('layouts.app')

@section('content')

{{Form::open(['route' => 'categories.store'])}}
    {{Form::input('text', 'name')}}
    {{Form::textarea('description')}}
    {{Form::submit('create')}}
{{Form::close()}}

@endsection