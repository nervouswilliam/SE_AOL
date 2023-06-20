@extends('layouts.new_main')

@section('contents')
<link href='https://fonts.googleapis.com/css?family=DM Mono' rel='stylesheet'>
<link rel="stylesheet" href="/css/view_inv-style.css">
<div class="container">
    <h2>
        View Inventory
    </h2>
    <form action = "/viewinventory" method = "GET">
        <p>
            sort by:
            <select name="sort_by" id="sort_by">
                <option value="created_at" {{ $sortBy }}>Newest</option>
                <option value="created_at" {{ $sortASC }}>Oldest</option>
            </select>
            <button id = "sort-button" type = "submit"> Sort </button>
        </p>
    </form>
    <div class="table">
        <div class="row">
            <div class="title">
                <h5>
                    Product Name
                </h5>
            </div>
            <div class="column">

                @foreach($items as $item)
                    <p>{{ $item-> name }} </p>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="title">
                <h5>
                    Quantity
                </h5>
            </div>
            <div class="column">

                @foreach($inventories as $inventory)
                    <p>{{ $inventory-> quantity }} </p>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="title">
                <h5>
                    Expired Date
                </h5>
            </div>
            <div class="column">

                @foreach($inventories as $inventory)
                    <p>{{ $inventory -> expire_date }} </p>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="title">
                <h5>
                    Date of Insert
                </h5>
            </div>
            <div class="column">

                @foreach($items as $item)
                    <p>{{ $item -> created_at }} </p>
                @endforeach
            </div>
        </div>
        <div class = "row">
            <div class = "title">
                <h5>
                    Update
                </h5>
            </div>
        <div class="column">

                @foreach($items as $item)
                    <p> <a href = "/menu/{{ $item -> id }}/edit"> Update </a> </p>
                @endforeach
        </div>
        </div>
        <div class = "row">
            <div class = "title">
                <h5>
                    Delete
                </h5>
            </div>
        <div class="column">

                @foreach($items as $item)
                    <p> <a href = "/menu/{{ $item -> id }}/delete"> Delete </a> </p>
                @endforeach
        </div>
        </div>
    </div>
</div>
@endsection
