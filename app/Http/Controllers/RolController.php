<?php

namespace App\Http\Controllers;

use App\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $roles = Rol::all();
        // return response()->json([ 'role' => $roles ]);
        return view('layouts.rol.rol', compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.rol.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $role = new Rol;
        $role->name = $request->name;
        $role->save();

        return Redirect('/roles')->with('message','Saved Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Rol  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Rol $role)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Rol  $role
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $role = Rol::find($id);
        return view('layouts.rol.edit',compact('role'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Rol  $role
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $role = Rol::find($id);
        $this->validate(request(), [
            'name' => 'required',
        ]);
        $role->name = $request->name;
        $role->save();

        return Redirect('/roles')->with('message','Saved Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Rol  $role
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $role = Rol::find($id);
        $role->delete();

        return redirect('/roles');
    }
}
