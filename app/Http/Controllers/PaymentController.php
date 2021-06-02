<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\Payment;
use Carbon;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index(){
        $payment = Payment::with(['subscriptions'])->get();
        return view('payments_user',compact('payment'));
    }
    public function create()
    {
        $subscription = Subscription::all();
        return view('user.payment.payment',compact('subscription'));
    }
    
    public function store(Request $request)
    {
        $user = Auth::user();

        if($user->expire_subscription > now()){
            return redirect()->back()->with('danger','danger');
        }
        $request->validate([
            'subscriptions_title' => ['required','string','max:255'],
        ]);
        $subscriptions = Subscription::where('title',$request->subscriptions_title)->get()[0];
        $payment=new Payment;
        $payment->user_id = $user->id;
        $payment->title = $subscriptions->title;
        $payment->price = $subscriptions->price;
        $payment->start_sub = Carbon\Carbon::now();
        $payment->expire_sub =Carbon\Carbon::now()->addDays($subscriptions->time);
        $payment->save();
        
        $user->update([
            'expire_subscription' => $payment->expire_sub
        ]);

        return redirect()->route('dashboard');
    }
}
