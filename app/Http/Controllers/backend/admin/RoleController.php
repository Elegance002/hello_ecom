<?php

namespace App\Http\Controllers\backend\admin;

use App\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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
        return view('backend.staff.staff_roles.index')->with('roles',$roles);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.staff.staff_roles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->has('permission')){
            $role= new Role;
            $role->name =$request->name;
            $role->slug =Str::slug($request->name.'-'.date('ymdis').'-'.rand(0,999));
            $role->permission = json_encode($request->permission);
            $role->save();

            return redirect()->route('roles.index')->with('success','Item created successfully!');
        }

        return back()->with('error','Something Went Wrong!');

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

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role=Role::findOrFail($id);
        return view('backend.staff.staff_roles.edit')->with('role',$role);
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
        $role=Role::findOrFail($id);
        if($request->has('permission')){
            $role->name =$request->name;
            $role->slug =Str::slug($request->name.'-'.date('ymdis').'-'.rand(0,999));
            $role->permission = json_encode($request->permission);
            $role->save();

            return redirect()->route('roles.index')->with('success','Updated successfully!');
        }

        return back()->with('error','Something Went Wrong!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role=Role::findOrFail($id);
        if($role){
            $status=$role->delete();
            if($status){
                request()->session()->flash('success','role successfully deleted');
            }
            else{
                request()->session()->flash('warning','Error, Please try again');
            }
            return redirect()->route('roles.index');
        }
        else{
            request()->session()->flash('error','role not found');
            return redirect()->back();
        }

    }
}
