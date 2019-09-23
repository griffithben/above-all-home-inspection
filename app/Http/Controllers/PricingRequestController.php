<?php

namespace App\Http\Controllers;

use App\Http\Requests\PricingRequest;

class PricingRequestController extends Controller
{
    public function create(PricingRequest $pricingRequest)
    {
        $validated = $pricingRequest->validated();
    }
}
