@extends('layouts.secondary')

@section('title', 'Quote')

@php $menu = 'quote' @endphp

@section('content')
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
