@extends('layouts.main')

@section('contents')
<link rel="stylesheet" href="/css/login_register.css">
    <div class="center">
        <h1>Login Page</h1>
        <form method="post">
            {{ csrf_field() }}
            <div class="txt">
                <input type="text" required>
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt">
                <input type="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="regist">
                Don't have an account yet?<a href="/register">Register</a>
            </div>
            <input type="submit" value="Login" />
        </form>
    </div>
@endsection
