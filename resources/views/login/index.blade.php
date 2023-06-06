@extends('layouts.main')

@section('contents')
<link rel="stylesheet" href="/css/login_register.css">
<div class="background">
      <div class="center">
        <h1>Login page</h1>
        <form action="/login" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="txt">
            <label class="username">Username</label>
            <input type="text" required name = "name">
          </div>
          <div class="txt">
            <label class="pass">Password</label>
            <input class="password" type="password" required name = "password">
          </div>
          <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="remember_me" name="remember_me">
                    <label class="form-check-label" for="remember_me">Remember me</label>
                </div>
          <input type="submit" value="Register" />
          <div class="regist">
            I dont have an account <a href="/register">register</a>
          </div>
          @if ($errors->any())
            <ul>
              @foreach($errors->all() as $error)
                <li style = "color: red">{{ $error }}</li>
              @endforeach
            </ul>
          @endif
        </form>
      </div>
    </div>
@endsection