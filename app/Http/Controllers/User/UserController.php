<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    
    public function index()
    {
        $users=User::all()->get();
        return view('admin.user.index',compact($users));
    }

    
    public function create()
    {
        return view('admin.user.create');
    }

    
    public function store(Request $request)
    {
        //
    }

    

    public function edit($id)
    {
        $user=User::find($id);
        return view('admin.user.edit', compact($user));
    }

    public function update(Request $request, $id)
    {
        $user=User::find($id);
        
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'mobile'=> 'required|numeric|digits:11|unique:users',
            'age' =>'integer|nullable',
            'country' =>'string|nullable',
            'city' => 'string|nullable',
            'national_code'=>'string|nullable',
            'expire_subscription' =>'date|nullable',
            'mobile_verified' =>'boolean|nullable',
        ]);

        $user->update([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'mobile' => $request->mobile ,
            'age' => $request->age,
            'country' => $request->country,
            'city' => $request->city,
            'national_code' => $request->nathional_code,
            'expire_subscription' => $request->expire_subscription,
            'mobile_verified' => $request->mobile_verified,
        ]);

        return redirect()->route('named_route');
    }

    public function destroy($id)
    {
        User::find($id)->delete();
        return redirect()->back();
    }

    public function edit_user($id)
    {
        $user=User::find($id);
        return view('user.edit', compact($user));
    }

    public function show($id)
    {   
        $user=User::find($id);
        return view('user.index', compact($user));
    }
    
    public function update_user(Request $request, $id)
    {
        $user=User::find($id);
        
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'age' =>'integer|nullable',
            'country' =>'string|nullable',
            'city' => 'string|nullable',
            'national_code'=>'string|nullable',
        ]);

        $user->update([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'age' => $request->age,
            'country' => $request->country,
            'city' => $request->city,
            'national_code' => $request->nathional_code,
        ]);

        return redirect()->route('named_route');
    }

}
