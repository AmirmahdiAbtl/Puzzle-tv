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
        return view('create_payment',compact('subscription'));
    }
    
    public function store(Request $request)
    {
        $user = Auth::user();

        if($user->expire_subscription > now()){
            return redirect()->route('home');
        }
        $request->validate([
            'subscriptions_title' => ['required','string','max:255'],
        ]);
        $subscriptions = Subscription::find('title',$request->subscriptions_title)->get()[0];
        $payment=new Payment;
        $payment->user_id = $user->id;
        $payment->subscriptions_id = $subscriptions->id;
        $payment->start_sub = Carbon\Carbon::now();
        $payment->expire_sub =Carbon\Carbon::now()->addDays($subscriptions->time);
        $payment->save();
        
        $user->update([
            'expire_subscription' => $payment->expire_sub
        ]);

        return redirect()->route('payment.index');
    }
    public function show()
    {
        $user=Auth::user();
        $payments=$user->payments;
        return view('', ['payments'=>$payments]);
    }
}
