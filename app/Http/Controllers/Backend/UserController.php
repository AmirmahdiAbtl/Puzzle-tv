<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Carbon;

use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('roles')->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.users.index', compact('users'));
    }


    public function edit(User $user)
    {
        $permissions = Permission::all();
        $roles = Role::all();
        $user->load('roles', 'permissions');
        return view('admin.users.edit', compact('permissions', 'roles', 'user'));
    }


    public function edit_user()
    {
        return view('auth.Dashboard.edit', ['user'=>Auth::user()]);
    }

    public function update_user(Request $request)
    {
        $user =Auth::user();
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

        return back()->with('success', true);
    }

    public function update(Request $request, User $user)
    {
        
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'mobile'=> ['required','numeric','digits:11',Rule::unique('users')->ignore($user->id)],
            'age' =>'integer|nullable',
            'country' =>'string|nullable',
            'city' => 'string|nullable',
            'national_code'=>'string|nullable',
        ]);

        $user->update([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'mobile' => $request->mobile ,
            'age' => $request->age,
            'country' => $request->country,
            'city' => $request->city,
            'national_code' => $request->nathional_code,
        ]);

        $user->givePermissionsTo($request->permissions);

        $user->giveRolesTo($request->roles);

        return back()->with('success', true);
    }

    public function create()
    {
        $permissions = Permission::all();

        $roles = Role::all();

        return view('admin.users.create', compact('permissions', 'roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'mobile' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'mobile' => $request->mobile,
            'access' => 1,
            'password' => Hash::make($request->password),
        ]);

        $user->givePermissionsTo($request->permissions);

        $user->giveRolesTo($request->roles);

        return redirect()->route('user.index')->with('success', true);
    }

        /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // 
    }

    public function destroy(User $user)
    {
        $user->delete();

        return back()->with('success',true);
    }

    public function dashboard()
    {
        $user=Auth::user();
        $payments=$user->payments;
        return view('dashboard', ['payments'=>$payments,'user'=>$user]);
    }
}
