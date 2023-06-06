@extends('layouts.new_main')

@section('contents')
<link href='https://fonts.googleapis.com/css?family=DM Mono' rel='stylesheet'>
<link rel="stylesheet" href="/css/postHome-Style.css">
<div class="container">
    <h2>
        Welcome Username
    </h2>
    <div class="enterprise-container">
        <h3>
            Your Enterprise
        </h3>
        <div class="enterprise-list">

        </div>
    </div>
    <div class="newsletter">
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
    <div class="subscribe-list">
        <h3>
            Subscribe to get more benefits!
        </h3>
        <div class="sub-benefit">
            <div class="benefit1"></div>
            <div class="benefit2"></div>
            <div class="benefit3"></div>
        </div>
        <div class="btn-sub">
            <a href="/subscribe"><button class="subs" type="button">Subscribe Now!</button></a>
        </div>
    </div>
</div>
@endsection
