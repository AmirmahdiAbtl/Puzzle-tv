<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\tofactor;
use App\Providers\RouteServiceProvider;
use Kavenegar;
use Kavenegar\Exceptions\ApiException;
use Kavenegar\Exceptions\HttpException;
use Illuminate\Http\Request;
class NumberVerificationController extends Controller
{
    private $user;
    private $text;
    public function index($id){
        $user = User::find($id);
        return view('Auth.verify-number',compact('user'));
    }
    public function store(Request $request ,$id){
        $request->validate([
            'number'=> ['required','digits:5']
        ]);
        $tofactor = tofactor::where('user_id',$id)->first();
        if($tofactor->created_at->addMInutes(2) < now()){
            return redirect()->route('verification.notice',['id'=>$id])->with('messages' ,'wrong');
        }else{
            if($tofactor->verify_number == $request->number){
                $user = User::find($id);
                $user->mobile_verified = 1;
                $user->save();
                return redirect(RouteServiceProvider::HOME);
            }else{
                return redirect()->back()->with('wrong_number');
            }
        }
    }
    public function resend($id){

        $user = User::find($id);

        $phone = $user->mobile;
        $text = rand(10000,99999);
        $receptor =  "$phone";
        $template =  "newlogin";
        $type =  "sms";
        $token = $text;
        $token2 =  "";
        $token3 =  "";
        $result = Kavenegar::VerifyLookup($receptor, $token, $token2, $token3, $template, $type);

        $tofactor = tofactor::where('user_id',$id)->first();
        $tofactor->update([
            'user_id' => $id,
            'verify_number' => $text,
            'created_at' => now()
        ]);

        return redirect()->back();
    }
}
