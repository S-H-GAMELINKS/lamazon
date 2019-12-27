@extends('layouts.app')

@section('content')

{{Form::model($user, ['route' => 'mypage.update', 'method' => 'PUT'])}}
    {{Form::textarea('name')}}
    {{Form::submit('save')}}
{{Form::close()}}

@endsection