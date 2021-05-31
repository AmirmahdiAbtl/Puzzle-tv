<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kavenegar;
use Kavenegar\Exceptions\ApiException;
use Kavenegar\Exceptions\HttpException;
use App\Models\User;
use App\Models\Password;

class PasswordResetLinkController extends Controller
{
    /**
     * Display the password reset link request view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.forgot-password');
    }

    /**
     * Handle an incoming password reset link request.
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
            'number' => 'required|numeric|digits:11',
        ]);

        // We will send the password reset link to this user. Once we have attempted
        // to send the link, we will examine the response then see the message we
        // need to show to the user. Finally, we'll send out a proper response.
        $user = User::where('mobile',$request->number)->get();
        if(!count($user)){
            return redirect()->back()->with('wrong_number');
        }else {
            $phone = $user[0]->mobile;
            $text = rand(10000,99999);
            $receptor =  "$phone";
            $template =  "newlogin";
            $type =  "sms";
            $token = $text;
            $token2 =  "";
            $token3 =  "";
            $result = Kavenegar::VerifyLookup($receptor, $token, $token2, $token3, $template, $type);
            
            $data = [
                'number' => $user[0]->mobile,
                'token' => $text,
                'created_at' => now()
            ];
            Password::create($data);

            return redirect()->route('password.reset',['id'=> $user[0]->id]);
        }
    }
}
