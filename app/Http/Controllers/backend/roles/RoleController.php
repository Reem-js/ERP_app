<?php

namespace App\Http\Controllers\backend\roles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function __construct()
    {
        // $this->middleware('can:All Roles')->only('index');
        // $this->middleware('can:Add Roles')->only('create','store');
        // $this->middleware('can:Edit Roles')->only('edit','update');
        // $this->middleware('can:Delete Roles')->only('destory');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $roles = Role::all();
        // return view('backend.roles.index',compact('roles'));
        return view('backend.roles.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $guards = array_keys(config('auth.guards'));
        // $permissions = Permission::all();
        // return view('backend.roles.create',compact('guards','permissions'));
        return view('backend.roles.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        // $rules = [
        //     'name'=>['required','string'],
        //     'guard_name'=>['nullable']
        // ];
        // $request->validate($rules);
        // $role = Role::create($request->except('_token'));
        // $role->syncPermissions($request->permission_id);
        // return redirect()->route('roles.index')->with('Success','Role Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $role = Role::findById($id);
        // $permissions = Permission::all();
        // $role_permissions = array_column(Role::with('permissions')->where('id',$id)->first()->toArray()['permissions'],'id');
        // $guards = array_keys(config('auth.guards'));
        // return view('backend.roles.edit',compact('role','guards','permissions','role_permissions'));
        return view('backend.roles.edit');


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $rules = [
        //     'name'=>['required','string'],
        //     'guard_name'=>['nullable']
        // ];
        // $request->validate($rules);
        // Role::where('id',$id)->update($request->except('_token','_method','permission_id'));
        // $role = Role::findById($id);
        // $role->syncPermissions($request->permission_id);
        // return redirect()->route('roles.index')->with('Success','Role Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Role::destroy($id);
        // return redirect()->route('roles.index')->with('Success','Role Deleted Successfully');
    }
}
