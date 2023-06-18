@extends('layouts.new_main')

@section('contents')
<link rel="stylesheet" href="/css/formStyle.css">
<div class="background">
  <div class="center">
    <h1>Add Enterprise</h1>
    <form method="post">
        <div class="txt">
          <input id="inputRestaurant" required>
          <span></span>
          <label for="exampleInputEmail1">Enterprise name</label>
        </div>
        <input type="submit">
    </form>
  </div>
</div>
@endsection
