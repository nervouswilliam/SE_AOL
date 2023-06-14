@extends('layouts.main')

@section('contents')
<link rel="stylesheet" href="/css/formStyle.css">
<div class="background">
    <div class="center">
    <h1>Extract Product</h1>
    <form method="post">
        <label for="standard-select">Product Name</label>
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
        <div class="txt">
            <input type="text" id="quantity" required>
            <span></span>
            <label for="exampleInputEmail1">Input quantity want to Extract</label>
        </div>
        <input type="submit" name="insert" placeholder="extract">
    </form>
    </div>
</div>
@endsection
