@extends('layouts.main')

@section('contents')
<link rel="stylesheet" href="/css/formStyle.css">
    <h1>Extract Product</h1>
    <form>
        <div class="form-group">
        <label for="exampleFormControlSelect1">Product name</label>
        <select class="form-control" id="exampleFormControlSelect1">
          <option>1</option>
          <option>2</option>
          <option>3</option>
          <option>4</option>
          <option>5</option>
        </select>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Extracted Quantity</label>
            <input class="form-control" id="quantity" placeholder="Input quantity">
        </div>
    </form>
@endsection
