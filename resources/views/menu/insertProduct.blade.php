@extends('layouts.main')

@section('contents')
<link rel="stylesheet" href="/css/formStyle.css">
<div class="background">
    <div class="center">
    <h1>Add product to inventory </h1>
    <form action="/insertproduct", method = "post">
        {{ csrf_field() }}
        <div style = "color: black;">
            <div class="txt">
            <input type = "text" name = "name" style = "color: black;" required>
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
            <input type = "submit" name = "insert">
        </div>
    </form>
</div>
</div>
@endsection
