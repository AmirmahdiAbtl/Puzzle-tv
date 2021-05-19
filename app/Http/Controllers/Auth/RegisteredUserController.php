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
use App\Models\tofactor;

use Kavenegar;
use Kavenegar\Exceptions\ApiException;
use Kavenegar\Exceptions\HttpException;

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
            'mobile'=> 'required|numeric|digits:11|unique:users',
            'password'=> 'required',
        ]);

        $user = User::create([
            'fname' => $request->fname ,
            'lname' => $request->lname ,
            'mobile' => $request->mobile ,
            'password' => Hash::make($request->password) ,
        ]);

        
        
        $phone = $user->mobile;
        $text = rand(10000,99999);
        $receptor =  "$phone";
        $template =  "newlogin";
        $type =  "sms";
        $token = $text;
        $token2 =  "";
        $token3 =  "";
        $result = Kavenegar::VerifyLookup($receptor, $token, $token2, $token3, $template, $type);


        $tofactor = tofactor::create([
            'user_id' => $user->id,
            'verify_number' => $text,
            'created_at' => now()
        ]);
        event(new Registered($user));

        Auth::login($user);
        return redirect()->route('verification.notice',["id" => auth()->user()->id]);
    }
}
