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
    public function create()
    {
        return view('auth.forgot-password');
    }
    public function store(Request $request)
    {
        $request->validate([
            'number' => 'required|numeric|digits:11',
        ]);
        $user = User::where('mobile',$request->number)->get();
        $pass = Password::where('number',$request->number)->get();
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
            
            if(count($pass) >= 1){
                $pass[0]->update([
                    'token' => $text,
                    'created_at' => now()
                ]);
                return redirect()->route('password.reset',['id'=> $user[0]->id]);
            }

            $data = [
                'number' => $user[0]->mobile,
                'token' => $text,
                'created_at' => now()
            ];
            Password::create($data);

            return redirect()->route('password.reset',['id'=> $user[0]->id]);
        }
    }
    public function admin_store($id){
        $user = User::find($id);
        $pass = Password::where('number',$user->mobile)->get();
        // dd($pass);
            $phone = $user->mobile;
            $text = rand(10000,99999);
            $receptor =  "$phone";
            $template =  "newlogin";
            $type =  "sms";
            $token = $text;
            $token2 =  "";
            $token3 =  "";
            $result = Kavenegar::VerifyLookup($receptor, $token, $token2, $token3, $template, $type);
            
            if(count($pass) >= 1){
                $pass[0]->update([
                    'token' => $text,
                    'created_at' => now()
                ]);
                return redirect()->route('password.reset',['id'=> $user->id]);
            }

            $data = [
                'number' => $user->mobile,
                'token' => $text,
                'created_at' => now()
            ];
            Password::create($data);

            return redirect()->route('password.reset',['id'=> $user[0]->id]);

    }
}
