@extends('layouts.new_main')

@section('contents')
<link href='https://fonts.googleapis.com/css?family=DM Mono' rel='stylesheet'>
<link rel="stylesheet" href="/css/report_inv-style.css">
<div class="container">
    <h2>
        Report Inventory
    </h2>
    <div class="table">
        <div class="row">
            <div class="title">
                <h5>
                    Product ID
                </h5>
            </div>
            <div class="column">
                <!-- <p>dummy-text</p> -->
                @foreach($items as $item)
                    <p> {{ $item -> id }} </p>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="title">
                <h5>
                    Product Name
                </h5>
            </div>
            <div class="column">
                <!-- <p>dummy-text</p> -->
                @foreach($items as $item)
                    <p> {{ $item -> name }} </p>
                @endforeach
            </div>
        </div>
        <div class="row">
            <div class="title">
                <h5>
                    Used Quantity
                </h5>
            </div>
            <div class="column">
                <!-- <p>dummy-text</p> -->
                @foreach($inventories as $inventory)
                    <p> {{ $inventory -> quantity }} </p>
                @endforeach
            </div>
        </div>
    </div>

    <div class="summary">
        <h2>
            Monthly Summary
        </h2>
        <div class="list-sum">
            <h5>
                Most Restocked:
            </h5>
            <p>
                {{ $data -> name }}
            </p>
        </div>
        <div class="list-sum">
            <h5>
                Most Expired:
            </h5>
            <p>
                {{ $exp -> name }}
            </p>
        </div>
        <div class="list-sum">
            <h5>
                Least Restocked:
            </h5>
            <p>
                {{ $leastData -> name }}
            </p>
        </div>
        <div class="list-sum">
            <h5>
                Least Expired:
            </h5>
            <p>
                {{ $leastExp -> name }}
            </p>
        </div>
    </div>
</div>
@endsection
