<?php

namespace App\Http\Controllers;

use App\Notifications\PaymentReceived;

class PaymentsController extends Controller
{
    public function show()
    {
        return view('payments.create');
    }
    
    public function store()
    {
        request()->user()->notify(new PaymentReceived());
    }
}
