<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Role::all();
        return view('admin.roles.index', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validateStoreForm($request);

        Role::create($request->only('name', 'persian_name'));

        return back()->with('success', true);
    }
    
    protected function validateStoreForm($request)
    {
        return $request->validate([
            'name' => ['required'],
            'persian_name' => ['required']
        ], [
            'name.required' => 'لطفا نام نقش را وارد کنید.',
            'persian_name.required' => 'لطفا نام فارسی نقش را وارد کنید .'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $permissions = Permission::all();
        $role->load('permissions');
        return view('admin.roles.edit', compact('permissions', 'role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Role $role)
    {
        $this->validateUpdateForm($request);

        $role->update($request->only('name', 'persian_name'));

        $role->givePermissionsTo($request->permissions);

        return back()->with('success', true);
    }

    public function validateUpdateForm($request)
    {
        return $request->validate([
            'name' => ['required'],
            'persian_name' => ['required']
        ], [
            'name.required' => 'لطفا نام نقش را وارد کنید.',
            'persian_name' => 'لطفا نام فارسی نقش را وارد کنید .'
        ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();

        return back()->with('success', true);
    }
}
