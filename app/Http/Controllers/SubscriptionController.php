<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscription;

class SubscriptionController extends Controller
{   
    public function index(){
        $subscriptions=Subscription::all();
        return view('admin.subscription.index',['subscriptions'=>$subscriptions]);

    }
    public function create()
    {
        return view('admin.subscription.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required','string','max:255'],
            'time' => ['required','integer'],
            'price' => ['required','string','max:255'],
        ]);
    
        $subscription = [
            'title' => $request->title,
            'time' => $request->time,
            'price' => $request->price,
        ];

        $subscriptions = Subscription::create($subscription);
        return redirect()->route('home');
    }

    public function edit($id)
    {
        $subscription = Subscription::find($id);
        return view('admin.subscription.edit',['subscription'=>$subscription]);
    }

    public function update(Request $request, $id)
    {
        $subscription = Subscription::find($id);
    
        $request->validate([
            'title' => ['required','string','max:255'],
            'time' => ['required','integer'],
            'price' => ['required','string','max:255'],
        ]);
    
        $data = [
            'title' => $request->title,
            'time' => $request->time,
            'price' => $request->price,
        ];
    
        $subscription->update($data);
        return redirect()->route('home');
    }

    public function delete($id)
    {   
        Subscription::find($id)->delete();
        return redirect()->route('home');
    }

}
