@extends('layouts.main')

@section('contents')
<link rel="stylesheet" href="/css/login_register.css">
<div class="background">
    <div class="center">
        <h1>Login page</h1>
        <form action="/login" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="txt">
                <input type="text" required name="email">
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt">
                <input type="password" required name="password">
                <span></span>
                <label>Password</label>
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="remember_me" name="remember_me">
                <label class="form-check-label" for="remember_me">Remember me</label>
            </div>
            @if ($errors->any())
                <ul>
                @foreach($errors->all() as $error)
                    <li style = "color: red">{{ $error }}</li>
                @endforeach
                </ul>
            @endif
            <input type="submit" value="Login" />
            <div class="regist">
                Don't have an account? <a href="/register">register</a>
            </div>
        </form>
    </div>
</div>
@endsection
