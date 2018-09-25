@extends('layouts.secondary')

@section('title', 'Services')

@php $menu = 'services' @endphp

@section('content')
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Services</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-transparent">Roof, Vents, Flashings and Trim, Gutters, and Downspouts</li>
                        <li class="list-group-item bg-transparent">Skylight, Chimney, and other Roof penetrations </li>
                        <li class="list-group-item bg-transparent">Eaves, Soffits, and Fascia</li>
                        <li class="list-group-item bg-transparent">Decks, Stoops</li>
                        <li class="list-group-item bg-transparent">Porches, Walkways, and Railings</li>
                        <li class="list-group-item bg-transparent">Grading and Drainage</li>
                        <li class="list-group-item bg-transparent">Basement, Foundation, and Crawlspace</li>
                        <li class="list-group-item bg-transparent">Water penetration and Foundation movement</li>
                        <li class="list-group-item bg-transparent">Heating systems, Cooling systems</li> 
                        <li class="list-group-item bg-transparent">Main water shut off Valves</li>
                    </ul>
                </div>
                <div class="col-sm">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item bg-transparent">Water heating system</li>
                        <li class="list-group-item bg-transparent">Interior plumbing Fixtures and Faucets </li> 
                        <li class="list-group-item bg-transparent">Drainage sump pumps with accessible floats</li>
                        <li class="list-group-item bg-transparent">Electrical Service Line and Meter Box</li>
                        <li class="list-group-item bg-transparent">Main Disconnects and Service Amperage</li>
                        <li class="list-group-item bg-transparent">Electrical panels, Breakers and Fuses</li>
                        <li class="list-group-item bg-transparent">Grounding and Bonding, GFCIs and AFCIs</li>
                        <li class="list-group-item bg-transparent">Garage Doors, Safety Sensors, and Openers</li>
                        <li class="list-group-item bg-transparent">And much, more</li> 
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection