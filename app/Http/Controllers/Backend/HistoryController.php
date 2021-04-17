<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Test;
use App\Models\User;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function test(Test $test)
    {
        $test->with('histories');

        return view('admin.tests.histories', compact('test'));
    }

    public function user(User $user)
    {
        $user->with('histories');

        $testC = count($user->histories->where('action','testCreate'));
        $testU = count($user->histories->where('action','testUpdate'));
        $testD = count($user->histories->where('action','testDelete'));
        $faqC = count($user->histories->where('action','faqCreate'));
        $faqU = count($user->histories->where('action','faqUpdate'));
        $faqD = count($user->histories->where('action','faqDelete'));
        
        return view('admin.users.histories', compact('user','testC','testU','testD','faqC','faqU','faqD'));
    }
}
