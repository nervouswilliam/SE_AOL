@extends('layouts.main')

@section('contents')
    <form action="/store", method = "post">
        <div style = "color: black;">
            <h1>add product to inventory </h1>
            </br>
            <!-- user id -->
            <label for="labelUserId"> Add User id </label>
            </br>
            <input type = "int" name = "UserId" style = "color: black;">
            </br>
            <!-- item id -->
            <label for="labelItemId"> Add item id </label>
            </br>
            <input type = "int" name = "itemId" style = "color: black;">
            </br>
            <!-- item expired date -->
            <label for="ItemExpDate"> Add item expired date </label>
            </br>
            <input type = "date" name = "itemExpiredDate" style = "color: black">
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
    




