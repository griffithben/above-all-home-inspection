@extends('layouts.secondary')

@section('title', 'Quote')

@php $menu = 'quote' @endphp

@section('content')
    <section class="py-5">
        <div class="container">
            <h1>Request a Quote</h1>
            <p>Request a quote Text</p>

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
                <label>First Name</label>
                <input id="first_name" name="first_name" type="text"/>
                <br/>
                <label>Last Name</label>
                <input id="last_name" name="last_name" type="text"/>
                <br/>
                <label>Email</label>
                <input id="email" name="email" type="text"/>
                <br/>
                <label>Phone</label>
                <input id="phone" name="phone" type="text"/>
                <br/>
                <label>Approximate Square Feet</label>
                <select id="approximate_square_feet" name="approximate_square_feet">
                    <option value="0-2000">0-2000 sqft</option>
                    <option value="2000-3000">2000-3000 sqft</option>
                    <option value="3000-4000">3000-4000 sqft</option>
                    <option value="4000+">4000+ sqft</option>
                </select>
                <br/>
                <label>Comments/Questions?</label>
                <textarea id="comments" name="comments"></textarea>
                <br/>
                <br/>
                <input id="submit" name="submit" type="submit" value="Send Request"/>
            </form>
        </div>
    </section>
@endsection
