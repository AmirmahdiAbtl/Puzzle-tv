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
    public function index(){
        return view('Auth.verify-number');
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
            }
            return redirect(RouteServiceProvider::HOME);
        }
    }
}
