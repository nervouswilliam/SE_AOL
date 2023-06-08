@extends('layouts.main')

@section('contents')
<link rel="stylesheet" href="/css/formStyle.css">
    <h1>Add Restaurant</h1>
    <form>
        <div class="form-group">
          <label for="exampleInputEmail1">Restaurant name</label>
          <input class="form-control" id="inputRestaurant" placeholder="Enter Restaurant name">
        </div>
        <button type="submit">Add</button>
    </form>
@endsection