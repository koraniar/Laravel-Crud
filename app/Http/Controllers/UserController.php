<?php

namespace App\Http\Controllers;

use App\User;
use App\Rol;
use App\Business;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('layouts.user.user', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return Redirect('/users')->with('message','Saved Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('layouts.user.edit',compact('user'));
    }

    public function changeActive($id, $active)
    {
        $user = User::find($id);
        $user->active = $active;
        $user->save();

        return Redirect('/users')->with('message','Saved Successfully!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
        ]);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = $request->password;
        $user->save();

        return Redirect('/users')->with('message','Saved Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return redirect('/users');
    }

    public function roles($id)
    {
        $user = User::find($id);
        return view('layouts.user.roles',compact('user'));
    }

    public function addRoles($id)
    {
        $user = User::find($id);
        $allRoles = Rol::all();
        $roles = [];


        foreach ($allRoles as $role) {
            $add = true;
            foreach ($user->roles as $userRole) {
                if ($role->id == $userRole->id) {
                    $add = false;
                    break;
                }
            }

            if ($add) {
                array_push($roles, $role);
            }
        }

        return view('layouts.user.addrole',compact('user', 'roles'));
    }

    public function assignRole($id, $roleid)
    {
        $user = User::find($id);
        $rol = Rol::find($roleid);

        $user->roles()->attach($rol);

        return Redirect('/users/roles/'.$id)->with('message','Saved Successfully!');
    }

    public function unassignRole($id, $roleid)
    {
        $user = User::find($id);
        $rol = Rol::find($roleid);

        $user->roles()->detach($rol);

        return Redirect('/users/roles/'.$id)->with('message','Saved Successfully!');
    }

    public function businesses($id)
    {
        $user = User::find($id);
        return view('layouts.user.businesses',compact('user'));
    }

    public function addBusinesses($id)
    {
        $user = User::find($id);
        $allBusinesses = Business::all();
        $businesses = [];


        foreach ($allBusinesses as $business) {
            $add = true;
            foreach ($user->businesses as $userBusiness) {
                if ($business->id == $userBusiness->id) {
                    $add = false;
                    break;
                }
            }

            if ($add) {
                array_push($businesses, $business);
            }
        }

        return view('layouts.user.addbusiness',compact('user', 'businesses'));
    }

    public function assignBusiness($id, $businessid)
    {
        $user = User::find($id);
        $business = Business::find($businessid);

        $user->businesses()->attach($business);

        return Redirect('/users/businesses/'.$id)->with('message','Saved Successfully!');
    }

    public function unassignBusiness($id, $businessid)
    {
        $user = User::find($id);
        $business = Business::find($businessid);

        $user->businesses()->detach($business);

        return Redirect('/users/businesses/'.$id)->with('message','Saved Successfully!');
    }
}
