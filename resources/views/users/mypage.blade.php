@extends('layouts.app')

@section('content')

{{$user->name}}

<a href="{{route('mypage.edit')}}">edit</a>

@endsection