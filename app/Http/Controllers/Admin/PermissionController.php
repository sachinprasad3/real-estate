<?php

namespace App\Http\Controllers\Admin;

use App\Model\permission;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $permissions = permission::all();
        return view('AdminPanel.permission.show',compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('AdminPanel.permission.createPermission');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
          'name'=>'required|max:50|unique:permissions',
          'for' => 'required'
        ]);

        $permission = new permission;
        $permission->name = $request->name;
        $permission->forname = $request->for;

        $permission->save();
        return redirect(route('permission.index'))->with('message','Permission added successfully');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Model\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function show(permission $permission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Model\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function edit(permission $permission)
    {
        $permission = permission::find($permission->id);
        return view('AdminPanel.permission.edit',compact('permission'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Model\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, permission $permission)
    {
      $this->validate($request,[
        'name'=>'required|max:50',
        'for' => 'required'
      ]);

      $permission = permission::find($permission->id);
      $permission->name = $request->name;
      $permission->forname = $request->for;

      $permission->save();
      return redirect(route('permission.index'))->with('message','permission updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Model\permission  $permission
     * @return \Illuminate\Http\Response
     */
    public function destroy(permission $permission)
    {
      permission::where('id',$permission->id)->delete();
      return redirect()->back()->with('message','permission deleted successfully');
    }
}
