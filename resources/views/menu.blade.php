@extends('layouts.main')

@section('contents')
<link rel="stylesheet" href="/css/menuStyle.css">
<div class="background">
    <div class="content">
        <div class="column">
            <div class="upper">
                <center><a href="#"><img src="/img/insertProduct.png"></a></center>
            </div>
            <div class="middle">
                <h2>INSERT PRODUCT</h2>
            </div>
            <div class="lower">
                <h3>
                    You can insert your product
                </h3>
            </div>
        </div>

        <div class="column">
            <div class="upper">
                <center><a href="#"><img src="/img/removeProduct.png"></a></center>
            </div>
            <div class="middle">
                <h2>EXTRACT PRODUCT</h2>
            </div>
            <div class="lower">
                <h3>You can remove your product</h3>
            </div>
        </div>

        <div class="column">
            <div class="upper">
                <center><a href="#"><img src="/img/viewProduct.png"></a></center>
            </div>
            <div class="middle">
                <h2>VIEW INVENTORY</h2>
            </div>
            <div class="lower">
                <h3>You can view your product in inventory</h3>
            </div>
        </div>

        <div class="column">
            <div class="upper">
                <center><a href="#"><img src="/img/viewReport.png"></a></center>
            </div>
            <div class="middle">
                <h2>INVENTORY REPORT</h2>
            </div>
            <div class="lower">
                <h3>You can view your inventory report</h3>
            </div>
        </div>
    </div>
</div>
@endsection
