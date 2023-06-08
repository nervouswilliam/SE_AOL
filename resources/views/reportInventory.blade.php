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
            </div>
        </div>
        <div class="row">
            <div class="title">
                <h5>
                    Product Name
                </h5>
            </div>
            <div class="column">
            </div>
        </div>
        <div class="row">
            <div class="title">
                <h5>
                    Used Quantity
                </h5>
            </div>
            <div class="column">
            </div>
        </div>
    </div>

    <div class="summary">
        <h2>
            Monthly Summary
        </h2>
        <h5>
            Most Restocked:
        </h5>
        <h5>
            Most Expired:
        </h5>
        <h5>
            Least Restocked:
        </h5>
        <h5>
            Least Expired:
        </h5>
    </div>
</div>
@endsection
