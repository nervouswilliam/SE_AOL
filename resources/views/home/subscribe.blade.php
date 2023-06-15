@extends('layouts.new_main')

@section('contents')
<link rel="stylesheet" href="/css/login_register.css">
<div class="background">
    <div class="center">
    <h1>Subscribe</h1>
    <form method = "post">
        {{ csrf_field() }}
            <div class="txt">
                <input type="text" id="username" name="username" required/>
                <span></span>
                <label for="username" class="username">Name</label>
            </div>
            <div class="txt">
                <input type="text" id="email" name="email" required/>
                <span></span>
                <label for="email" class="email">Email</label>
            </div>
            <label for="standard-select">Subscribe Plan</label>
            <div class="select">
            <select id="standard-select">
                <option value="Option 1">Option 1</option>
                <option value="Option 2">Option 2</option>
                <option value="Option 3">Option 3</option>
                <option value="Option 4">Option 4</option>
                <option value="Option 5">Option 5</option>
                <option value="Option length">Option that has too long of a value to fit</option>
            </select>
            <span class="focus"></span>
            </div>
            <label for="standard-select">Payment method</label>
            <div class="select">
            <select id="standard-select">
                <option value="Option 1">Ovo</option>
                <option value="Option 2">Gopay</option>
                <option value="Option 3">M-Banking</option>
            </select>
            <span class="focus"></span>
            </div>
            <input type="submit" style="margin-top: 10%">
    </form>
</div>
</div>
@endsection
    