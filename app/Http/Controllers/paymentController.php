<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Cartalyst\Stripe\Laravel\Facades\Stripe;
use App\Http\Controllers\Alert;

class paymentController extends Controller
{

    public function index()
    {
        return view('payment');
    }

    public function charge(Request $request)
    {

        $charge = Stripe::charges()->create([
            'currency' => 'USD',
            'source' => $request->stripeToken,
            'amount' =>   12,
            'description' => 'Test '
        ]);
        $chargId = $charge['id'];
        if ($chargId) {
            session()->forget('Buy');   
                     
            return redirect('/welcome')->with('status', 'Payment done');
        } else {
            return redirect()->back();
        }
    }
}
