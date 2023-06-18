@extends('layouts.new_main')

@section('contents')
<link href='https://fonts.googleapis.com/css?family=DM Mono' rel='stylesheet'>
<link rel="stylesheet" href="/css/view_inv-style.css">
<div class="container">
    <h2>
        View Inventory
    </h2>
    <p>
        sort by:
        <a href="">default</a>
    </p>
    <div class="table">
        <div class="row">
            <div class="title">
                <h5>
                    Product Name
                </h5>
            </div>
            <div class="column">
                <!-- <p>dummy-text</p> -->
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
                <!-- <p>dummy-text</p> -->
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
                <!-- <p>dummy-text</p> -->
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
                <!-- <p>dummy-text</p> -->
                @foreach($items as $item)
                    <p>{{ $item -> created_at }} </p>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
