@extends('layouts.main')

@section('contents')
<link rel="stylesheet" href="/css/login_register.css">
<div class="background">
      <div class="center">
        <h1>Login Page</h1>
        <form method="post">
          <div class="txt">
            <label class="email">Email</label>
            <input type="text" required />
          </div>
          <div class="txt">
            <label class="pass">Password</label>
            <input type="password" required />
          </div>
          <div class="regist">
            Don't have an account yet?<a href="/register">Register</a>
          </div>
          <input type="submit" value="Login" />
        </form>
      </div>
    </div>
@endsection
