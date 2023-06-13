@extends('layouts.main')

@section('contents')
<link rel="stylesheet" href="/css/formStyle.css">
    <form action="/insertproduct", method = "post">
        {{ csrf_field() }}
        <div style = "color: black;">
            <h1>add product to inventory </h1>
            </br>
            <!-- user id -->
            <label for="labelUserId"> Product Name</label>
            </br>
            <input type = "text" name = "name" style = "color: black;">
            </br>
            <!-- item id -->
            <label for="labelItemId"> Product Type </label>
            </br>
            <input type = "text" name = "type" style = "color: black;">
            </br>
            <!-- item expired date -->
            <label for="ItemExpDate"> Add item expired date </label>
            </br>
            <input type = "date" name = "expDate" style = "color: black">
            </br>
            <!-- item id -->
            <label for="LabelQuantity"> Quantity </label>
            </br>
            <input type = "int" name = "quantity" style = "color: black;">
            </br>
            <!-- button -->
            <input type = "submit" name = "insert">
        </div>
    </form>
@endsection
