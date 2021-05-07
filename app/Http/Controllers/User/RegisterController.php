<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    // User Register
    public function create() {
        return view('auth.register');
    }
    
    public function store(Request $request) {
        $validator  =   Validator::make($request->all(), [
            "fname"  =>  "required",
            "lname"  =>  "required",
            "mobile"  =>  "required|unique:users",
            "password"  =>  "required"
        ]);

        if($validator->fails()) {
        }

        // $inputs = $request->all();
        // $inputs["password"] = Hash::make($request->password);

        // $user   =   User::create($inputs);

        // if(!is_null($user)) {
        //     return response()->json(["status" => "success", "message" => "Success! registration completed", "data" => $user]);
        // }
        // else {
        //     return response()->json(["status" => "failed", "message" => "Registration failed!"]);
        // }
    }
}