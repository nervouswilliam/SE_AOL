@extends('layouts.new_main')

@section('contents')
<link rel="stylesheet" href="/css/formStyle.css">
<div class="background">
    <div class="center">
    <h1>Extract Product</h1>
    <form action = "/extractproduct", method="POST">
    {{ csrf_field() }}
        <label for="name">Product Name</label>
            <div class="select">
            <select name="name">
                @foreach($items as $item)
                    <option value = " {{ $item -> name }} "> {{ $item -> name }} </option>
                @endforeach
            </select>
            <span class="focus"></span>
            </div>
        <div class="txt">
            <input type="text" id="quantity"name = "quantity" required>
            <span></span>
            <label for="exampleInputEmail1">Input quantity want to Extract</label>
        </div>
        <input type="submit" name="insert" placeholder="extract">
    </form>
    </div>
</div>
@endsection
