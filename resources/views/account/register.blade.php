@extends('layouts.main')

@section('contents')
<link rel="stylesheet" href="/css/login_register.css">
<div class="background">
    <div class="center">
        <h1>Register Page</h1>
        <form method="post">
            {{ csrf_field() }}
            <div class="txt">
                <label for="username" class="username">Username</label>
                <input type="text" id="username" name="username"/>
            </div>
            <div class="txt">
                <label for="email" class="email">Email</label>
                <input type="text" id="email" name="email"/>
            </div>
            <div class="txt">
                <label for="password" class="pass">Password</label>
                <input class="password" type="password" id="pw" name="pw"/>
            </div>
            <div class="txt">
                <label for="confirm" class="conf">Confirm</label>
                <input class="confirm" type="password" id="confirmpw" name="confirmpw"/>
            </div>
            <input id="terms" type="checkbox" />
            <label for="terms">I agree with the terms and conditions</label>
            <input type="submit" value="Register" />
            <div class="regist">
                I already have account <a href="/login">Login</a>
            </div>
        </form>
    </div>
</div>
@endsection
