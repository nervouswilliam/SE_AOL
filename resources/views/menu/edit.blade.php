@extends('layouts.new_main')

@section('contents')
<link rel="stylesheet" href="/css/login_register.css">
<div class="background">
    <div class="center">
    <h1>Edit Inventory </h1>
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
            <input type = "text" name = "type" style = "color: black;" required>
            <span></span>
            <label for="labelItemId"> Product Type </label>
            </div>
            <div class="txt">
            <input type = "date" name = "expDate" style = "color: black">
            <span></span>
            <label for="ItemExpDate"> Add item expired date </label>
            </div>
            <div class="txt">
            <input type = "int" name = "quantity" style = "color: black;" required>
            <span></span>
            <label for="LabelQuantity"> Quantity </label>
            </div>
            <input type = "submit" name = "insert" style="margin-top:10%">
        </div>
    </form>
</div>
</div>
@endsection