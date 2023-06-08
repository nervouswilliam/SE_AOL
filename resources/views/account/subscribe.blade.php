@extends('layouts.main')

@section('contents')
<link rel="stylesheet" href="/css/formStyle.css">
    <h1>Subscribe Page<h1>
        <form>
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Subscribe Plan</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>1</option>
                  <option>2</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">Payment Method</label>
                <select class="form-control" id="exampleFormControlSelect1">
                  <option>Ovo</option>
                  <option>Gopay</option>
                  <option>Virtual Account</option>
                </select>
            </div>
        </form>
@endsection
    