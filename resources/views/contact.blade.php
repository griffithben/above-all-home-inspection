@extends('layouts.secondary')

@section('title', 'Contact')

@php $menu = 'contact' @endphp

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
                    <h1>Kevin Marshall</h1>
                    <p>Whether you're buying, selling or own a home, having a professional home inspection will give you peace of mind and assist you in knowing the health, safety, and condition of your home. I take great pride in every inspection i perform. When the inspection is over, your home inspector will prepare a detailed inspection report regarding the property. Most Inspection reports will be delivered same day via email.</p>
                    <p>As a certified home inspector, I spend on average 3 hours on most inspections and provide a detailed report including pictures with over 400 items inspected.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1>Request a Quote</h1>
                    <p>Please fill out the form below and we will get back to you as soon as possible!</p>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <form method="POST" action="/pricing">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        @csrf
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <label>First Name</label>
                                <input id="first_name" name="first_name" type="text"/>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <label>Last Name</label>
                                <input id="last_name" name="last_name" type="text"/>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <label>Email</label>
                                <input id="email" name="email" type="text"/>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-12">
                                <label>Phone</label>
                                <input id="phone" name="phone" type="text"/>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <label>Approximate Square Feet</label>
                                <select id="approximate_square_feet" name="approximate_square_feet">
                                    <option value="0-2000">0-2000 sqft</option>
                                    <option value="2000-3000">2000-3000 sqft</option>
                                    <option value="3000-4000">3000-4000 sqft</option>
                                    <option value="4000+">4000+ sqft</option>
                                </select>
                            </div>
                            <div class="col-md-4 col-sm-12">
                                <label>Comments/Questions?</label>
                                <textarea id="comments" name="comments"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <input id="submit" name="submit" type="submit" value="Send Request"/>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
