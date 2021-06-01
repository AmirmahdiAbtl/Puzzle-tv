<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\Rules;
use App\Models\User;
use App\Models\Password;

class NewPasswordController extends Controller
{
    /**
     * Display the password reset view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\View\View
     */
    public function create($id)
    {
        return view('auth.reset-password', ['id' => $id]);
    }

    /**
     * Handle an incoming new password request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request,$id)
    {
        $user = User::find($id);
        $token = Password::where('number',$user->mobile)->first();
        $request->validate([
            'token' => ['required'],
            'password' => ['required','confirmed','min:8'],
        ]);
        if($request->token == $token->token){
            $user->update([
                "password" => Hash::make($request->password)
            ]);
        }
        else{
            return redirect()->back()->with('wrong_number');
        }
        return redirect()->route('dashboard');
        
    }
}
