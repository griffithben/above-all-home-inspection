<?php

namespace App\Http\Controllers;

use App\Http\Requests\PricingRequest;
use Illuminate\Http\Request;

class ContactRequestController extends Controller
{
    public function create(Request $request, PricingRequest $pricingRequest)
    {
        $validated = $pricingRequest->validated();

        $email = new \SendGrid\Mail\Mail();
        $email->setFrom("website@aboveallhomeinspection.com", "Online Quote");
        $email->setSubject('Quote Requested From '.$validated['first_name'].' '.$validated['last_name']);
        $email->addTo('griffith.ben@gmail.com', "Ben Griffith");
        $email->addContent(
            "text/html",
            "<span><strong>Name:</strong> ".$validated['first_name']." ".$validated['last_name']."</span><br/>
            <span><strong>Email:</strong> ".$validated['email']."</span><br/>
            <span><strong>Phone:</strong> ".$validated['phone']."</span><br/>
            <span><strong>Approx. SqFt:</strong> ".$validated['approximate_square_feet']."</span><br/>
            <span><strong>Comments:</strong> ".$validated['comments']."</span>"
        );
        $sendgrid = new \SendGrid(getenv('SENDGRID_API_KEY'));
        print_r($validated);
        try {
            $response = $sendgrid->send($email);
            $request->session()->flash('success', 'Request has been sent!');
        } catch (\Exception $e) {
            echo 'Caught exception: '. $e->getMessage() ."\n";
        }

        return redirect()->to('/contact');
    }
}
