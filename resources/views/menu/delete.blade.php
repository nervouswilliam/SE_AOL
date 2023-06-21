@extends('layouts.new_main')

@section('contents')
<link rel="stylesheet" href="/css/login_register.css">
<link rel="stylesheet" href="/css/new_main.css">
<div class="background">
    <div class="center">
    <h1>Delete Inventory </h1>
    <form action="/menu/{{ $data -> id }}", method = "post">
        {{ csrf_field() }}
        @method('put')
        <div style = "color: black;">
            <div class="txt">
            <input type = "text" name = "name" value = "{{ $data -> name }}" style = "color: black;" required>
            <span></span>
            <label for="labelUserId"> Product Name</label>
            </div>
            <div class="txt">
            <input type = "text" name = "type" value = "{{ $data -> type }}" style = "color: black;" required>
            <span></span>
            <label for="labelItemId"> Product Type </label>
            </div>
            <input type = "submit" name = "insert" style="margin-top:10%">
        </div>
    </form>
</div>
</div>
@endsection
