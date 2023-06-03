@extends('layouts.main')

@section('contents')
<link rel="stylesheet" href="/css/login_register.css">
<div class="background">
      <div class="center">
        <h1>Register Page</h1>
        <form action="/register" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="txt">
            <label class="username">Username</label>
            <input type="text" required name = "name">
          </div>
          <div class="txt">
            <label class="email">Email</label>
            <input type="text" required name = "email">
          </div>
          <div class="txt">
            <label class="pass">Password</label>
            <input class="password" type="password" required name = "password">
          </div>
          <div class="txt">
            <label class="conf">Confirm</label>
            <input class="confirm" type="password" required name = "confirm">
          </div>
          <input id="terms" type="checkbox" />
          <label for="terms">I agree with the terms and conditions</label>
          @if ($errors->any())
            <ul>
              @foreach($errors->all() as $error)
                <li style = "color: red">{{ $error }}</li>
              @endforeach
            </ul>
          @endif
          <input type="submit" value="Register" />
          <div class="regist">
            I already have account <a href="/login">login</a>
          </div>
        </form>
      </div>
    </div>
@endsection
