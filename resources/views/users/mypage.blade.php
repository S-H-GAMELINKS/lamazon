@extends('layouts.app')

@section('content')

<h1>{{$user->name}}</h1>

<h2>{{$user->postal_code}}</h2>
<h2>{{$user->address}}</h2>
<h2>{{$user->phone}}</h2>

<a href="{{route('mypage.edit')}}">edit</a>

@endsection