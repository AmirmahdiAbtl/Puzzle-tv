<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'fname'=> 'required|string|max:255',
            'lname'=> 'required|string|max:255',
            'country'=> 'required|string|max:255',
            'city'=> 'required|string|max:255',
            'age' => 'required',
            'mobile'=> 'required|numeric|digits:11|unique:users',
            'password'=> 'required',
        ]);

        $user = User::create([
            'fname' => $request->fname ,
            'lname' => $request->lname ,
            'country' => $request->country ,
            'city' => $request->city ,
            'age' => $request->age ,
            'mobile' => $request->mobile ,
            'password' => Hash::make($request->password) ,
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }
}
