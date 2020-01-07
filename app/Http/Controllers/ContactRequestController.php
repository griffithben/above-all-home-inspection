<?php

namespace App\Http\Controllers;

use App\Http\Requests\PricingRequest;

class ContactRequestController extends Controller
{
    public function create(PricingRequest $pricingRequest)
    {
        $headers = 'From: <web@aboveallhomeinspection.com>' . "\r\n";
        mail("griffith.ben@gmail.com","My subject","new info", $headers);
        $validated = $pricingRequest->validated();
    }
}
