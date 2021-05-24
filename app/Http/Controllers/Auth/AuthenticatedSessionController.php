<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Kavenegar;
use Kavenegar\Exceptions\ApiException;
use Kavenegar\Exceptions\HttpException;
use App\Models\User;
use App\Models\tofactor;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(LoginRequest $request)
    {
        $request->authenticate();

        $request->session()->regenerate();
        $user = User::where('mobile',$request->mobile)->first();
        // dd($user);
        if($user->mobile_verified == 0){
            $tofactor = tofactor::where('user_id',$user->id)->first();
            $phone = $user->mobile;
            $text = rand(10000,99999);
            $receptor =  "$phone";
            $template =  "newlogin";
            $type =  "sms";
            $token = $text;
            $token2 =  "";
            $token3 =  "";
            $result = Kavenegar::VerifyLookup($receptor, $token, $token2, $token3, $template, $type);
            if(!$tofactor){
                tofactor::create([
                    'user_id' => $user->id,
                    'verify_number' => $text,
                    'created_at' => now()
                ]);
            }else{
                $tofactor->update([
                    'verify_number' => $text,
                    'created_at' => now()
                ]);
            }
            
            return redirect()->route('verification.notice',["id" => $user->id]);
        }
        return redirect('/dashboard');
    }

    /**
     * Destroy an authenticated session.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
