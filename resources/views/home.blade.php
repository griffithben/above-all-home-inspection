@extends('layouts.primary')

@section('title', 'Home')

@php $menu = 'home' @endphp

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                <div class="text-center">
                    <img src="/img/headshot.jpg" class="rounded-circle w-100" alt="...">
                </div>
                </div>
                <div class="col-sm-9">
                    <h1>Protect Your Investment</h1>
                    <p>Whether you're buying, selling or own a home, having a professional home inspection will give you peace of mind and assist you in knowing the health, safety, and condition of your home. I take great pride in every inspection i perform. When the inspection is over, your home inspector will prepare a detailed inspection report regarding the property. Most Inspection reports will be delivered same day via email.</p>
                    <p>As a certified home inspector, I spend on average 3 hours on most inspections and provide a detailed report including pictures with over 400 items inspected.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5" style="background-color: #EEE;">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-sm-3">
                    <div class="text-center">
                        <img src="/img/testimonial_1.jpg" class="rounded-circle w-75" alt="...">
                    </div>
                    <h5 class="text-center mt-3 font-weight-bold">BEN GRIFFITH</h5>
                    <p class="text-center">
                        Kevin did an incredibly thorough job and saved us from purchasing a home with some serious foundation issues.  Thank you Kevin!
                    </p>
                </div>
                <div class="col-sm-1">
                </div>
                <div class="col-sm-3">
                    <div class="text-center">
                        <img src="/img/test_1.png" class="w-100" alt="...">
                    </div>
                    <h5 class="text-center mt-3 font-weight-bold">CRACKED ROOF</h5>
                    <p class="text-center">
                        Kevin was able to crawl through the attic in the blistering heat find out what was going on under the roof.  Fortunately, he was able to find the issue at hand!
                    </p>
                </div>
                <div class="col-sm-1">
                </div>
                <div class="col-sm-3">
                    <div class="text-center">
                        <img src="/img/test_2.png" class="w-100" alt="...">
                    </div>
                    <h5 class="text-center mt-3 font-weight-bold">SETTLING FOUNDATION</h5>
                    <p class="text-center">
                        Foundation separated from wall most likely caused by improper drainage and landscaping.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection
