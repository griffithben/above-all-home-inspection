<?php

namespace App\Http\Controllers;

use App\Http\Requests\PricingRequest;
use Illuminate\Http\Request;
use SendGrid;
use SendGrid\Mail\Mail;

class ContactRequestController extends Controller
{
    public function create(Request $request, PricingRequest $pricingRequest)
    {
        $validated = $pricingRequest->validated();

        $email = new Mail(
            $validated['email'],
            'griffith.ben@gmail.com',
            'Quote Requested From '.$validated['first_name'].' '.$validated['last_name']
        );

        $sendgrid = new SendGrid(env('SENDGRID_API_KEY'));
        $sendgrid->send($email);

        $request->session()->flash('success', 'Request has been sent!');

        return redirect()->to('/contact');
    }
}
