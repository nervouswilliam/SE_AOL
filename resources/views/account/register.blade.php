@extends('layouts.main')

@section('contents')
<link rel="stylesheet" href="/css/login_register.css">
    <div class="center">
        <h1>Register Page</h1>
        <form method="post">
            {{ csrf_field() }}
            <div class="txt">
                <input type="text" id="username" name="name" required/>
                <span></span>
                <label for="username" class="username">Username</label>
            </div>
            <div class="txt">
                <input type="text" id="email" name="email" required/>
                <span></span>
                <label for="email" class="email">Email</label>
            </div>
            <div class="txt">
                <input class="password" type="password" id="password" name="password" required/>
                <span></span>
                <label for="password" class="pass">Password</label>
            </div>
            <div class="txt">
                <input class="confirm" type="password" id="confirmpw" name="confirm" required/>
                <span></span>
                <label for="confirm" class="conf">Confirm Password</label>
            </div>
            <div>
                <input id="terms" type="checkbox" />
                <label for="terms">I agree with the terms and conditions</label>
            </div>
            <input type="submit" value="Register" />
            @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                        <li style="color:red">{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="regist">
                I already have account <a href="/login">Login</a>
            </div>
        </form>
    </div>
@endsection
