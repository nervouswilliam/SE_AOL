@extends('layouts.main')

@section('container')
<main class="form-registration w-100 m-auto">
  <form action = "/register" method="post">
    @csrf
    <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
    <h1 class="h3 mb-3 fw-normal">Registration form</h1>

    <div class="form-floating">
      <input type="email" class="form-control" id="email" placeholder="Email@gmail.com">
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="name" class="form-control rounded top @error('name') is-invalid @enderror" id="username" placeholder="username">
      <label for="floatingInput">Username</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control rounded top is-invalid" id="Password" placeholder="Password">
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
    <p class="mt-5 mb-3 text-body-secondary">&copy; 2017–2023</p>
  </form>
</main>
@endsection