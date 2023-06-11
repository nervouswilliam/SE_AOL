@extends('layouts.main')

@section('contents')
<link rel="stylesheet" href="/css/menuStyle.css">
<div class="background">
    <div class="content">
        <div class="column">
            <div class="upper">
                <center><a href="/insertproduct"><img src="/img/insertProduct.png"></a></center>
            </div>
            <div class="middle">
                <h2>INSERT PRODUCT</h2>
            </div>
        </div>

        <div class="column">
            <div class="upper">
                <center><a href="/extractproduct"><img src="/img/removeProduct.png"></a></center>
            </div>
            <div class="middle">
                <h2>EXTRACT PRODUCT</h2>
            </div>
        </div>

        <div class="column">
            <div class="upper">
                <center><a href="/viewinventory"><img src="/img/viewProduct.png"></a></center>
            </div>
            <div class="middle">
                <h2>VIEW INVENTORY</h2>
            </div>
        </div>

        <div class="column">
            <div class="upper">
                <center><a href="/reportinventory"><img src="/img/viewReport.png"></a></center>
            </div>
            <div class="middle">
                <h2>INVENTORY REPORT</h2>
            </div>
        </div>
    </div>
</div>
@endsection
