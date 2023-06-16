@extends('layouts.new_main')

@section('contents')
<link href='https://fonts.googleapis.com/css?family=DM Mono' rel='stylesheet'>
<link rel="stylesheet" href="/css/postHome-Style.css">
<div class="container">
    <h2>
        Welcome {{ auth()->user()->name }}
    </h2>
    <div class="enterprise-container">
        <h3>
            Your Enterprise
        </h3>
        <div class="enterprise-list">
            <a href="/menu"><div class="rst">
                <img src="/img/insertProduct.png">
                <p>Add Enterprise</p>
            </div></a>
            <a href="/addrestaurant"><div class="rst">
                <img src="/img/insertProduct.png">
                <p>Add Enterprise</p>
            </div></a>
            <a href=""><div class="rst">
                <img src="/img/insertProduct.png">
                <p>Add Enterprise</p>
            </div></a>
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

    @auth
        @if (Auth::user()->role == 'unsubscribed')
        <div class="subscribe-list">
            <h3>
                Subscribe to get more benefits!
            </h3>
            <div class="sub-benefit">
                <div class="out-ben">
                    <div class="benefit">
                        <img src="/img/AddEnterprise.png">
                    </div>
                    <p>You can add more restaurant</p>
                </div>

                <div class="out-ben">
                    <div class="benefit">
                        <img src="/img/moreProducts.png">
                    </div>
                    <p>You can add more products</p>
                </div>

                <div class="out-ben">
                    <div class="benefit">
                        <img src="/img/more.png">
                    </div>
                    <p>More added benefits later on</p>
                </div>
            </div>
            <div class="btn-sub">
                <a href="/subscribe"><button class="subs" type="button">Subscribe Now!</button></a>
            </div>
        </div>
        @endif
    @else
    <div>

    </div>
    @endauth

</div>
@endsection
