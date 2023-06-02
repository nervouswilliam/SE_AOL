@extends('layouts.main')

@section('contents')
<link rel="stylesheet" href="/css/login_register.css">
<div class="background">
    <div class="center">
        <h1>Register Page</h1>
        <form method="post">
            {{ csrf_field() }}
            <div class="txt">
                <label class="name">Name</label>
                <input type="text" required />
            </div>
            <div class="txt">
                <label class="email">Email</label>
                <input type="text" required />
            </div>
            <div class="txt">
                <label class="pass">Password</label>
                <input class="password" type="password" required />
            </div>
            <div class="txt">
                <label class="conf">Confirm</label>
                <input class="confirm" type="password" required />
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
