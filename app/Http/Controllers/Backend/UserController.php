<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
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


    public function update(Request $request, User $user)
    {
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'mobile' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
        ]);

        $user->update([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
            'mobile' => $request->mobile,
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
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
        ]);

        $user = User::create([
            'fname' => $request->fname,
            'lname' => $request->lname,
            'email' => $request->email,
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
}
