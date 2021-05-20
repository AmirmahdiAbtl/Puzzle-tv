<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\Payment;
use Carbon;
use Auth;

class PaymentController extends Controller
{
    public function create()
    {
        return view('create_payment');
    }

    public function store(Request $request)
    {
        $request->validate([
            'subscriptions_title' => ['required','string','max:255'],
        ]);
        $subscriptions = Subscription::where('title',$request->subscriptions_title)->get()[0];
        
        $payment=new Payment;
        $payment->user_id = Auth::user()->id;
        $payment->subscriptions_id = $subscriptions->id;
        $payment->start_sub = Carbon\Carbon::now();
        $payment->expire_sub =Carbon\Carbon::now()->addDays($subscriptions->time);
        $payment->save();

        return redirect()->route('home');
    }
}
