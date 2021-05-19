<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumberVerificationController extends Controller
{
    public function index(){
        return view('Auth.verify-number');
    }
}
