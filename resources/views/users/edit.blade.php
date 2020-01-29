@extends('layouts.mypage')

@section('content')

<form action="/users/token" method="post">
    @csrf
    <script type="text/javascript" src="https://checkout.pay.jp/" class="payjp-button" data-key="{{ ENV('PAYJP_PUBLIC_KEY') }}" data-on-created="onCreated" data-text="支払う" data-submit-text="支払う" data-partial="true"></script>
    <input type="submit" value="送信する">
</form>

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