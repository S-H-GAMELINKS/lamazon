@extends('layouts.app')

@section('content')

<h1>{{$user->name}}</h1>

<h2>{{$user->postal_code}}</h2>
<h2>{{$user->address}}</h2>
<h2>{{$user->phone}}</h2>


<h3 class="text-center mt-3">お気に入り一覧</h3>

<div class="row d-flex justify-content-center">
    @foreach ($favorites as $fav)
    <div class="card col-3 m-3">
        <div class="card-body">
            <h5 class="card-title">{{$fav->name}}</h5>
            <p class="card-text">{{$fav->description}}</p>
            <a href="{{route('products.show', $fav)}}" class="btn btn-primary">Show Product</a>
        </div>
    </div>
    @endforeach
</div>

<a href="{{route('mypage.edit')}}">edit</a>

@endsection