@extends('layouts.app')

@section('content')

{{Form::model($user, ['route' => 'mypage.update', 'method' => 'PUT'])}}
    <div class="form-group">
        <h1>Name</h1>
        {{Form::input('text', 'name', $user->name, ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        <h1>Email</h1>
        {{Form::input('text', 'email', $user->email, ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        <h1>Postal Code</h1>
        {{Form::input('text', 'postal_code', $user->postal_code, ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        <h1>Address</h1>
        {{Form::input('text', 'address', $user->address, ['class' => 'form-control'])}}
    </div>
    <div class="form-group">
        <h1>Phone</h1>
        {{Form::input('text', 'phone', $user->phone, ['class' => 'form-control'])}}
    </div>
    {{Form::submit('save', ['class' => 'btn btn-primary'])}}
{{Form::close()}}

@endsection