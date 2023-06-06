@extends('layouts.new_main')

@section('contents')
<link href='https://fonts.googleapis.com/css?family=DM Mono' rel='stylesheet'>
<link rel="stylesheet" href="/css/homeStyle.css">
<div class="container">
    <div class="content1">
        <div class="left-content1">
            <h1>
                StocKing
            </h1>
            <p>
                Make your inventory management easier
            </p>
            <div class="btn-reg">
                <a href="/register"><button class="register" type="button">Register Now</button></a>
            </div>
        </div>
        <img src="/img/new-welc.jpg">
    </div>
    <div class="content2">
        <h3>
            About
        </h3>
        <div class="rectangle-content"></div>
        <p>
            StocKing is a web application that provides the services to help user and simplify the process of managing perishable goods
        </p>
    </div>
    <div class="content3">
        <div class="bg-img">
        </div>
        <h3>
            What's new?
        </h3>
        <div class="rectangle-content"></div>
        <p>
            Celebrating the version 1.0 release, all subscription plan will be 50% off till june 14th
        </p>
    </div>
</div>
@endsection
