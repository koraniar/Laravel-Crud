<?php

namespace App\Http\Controllers;

use App\Business;
use Illuminate\Http\Request;

class BusinessController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $businesses = Business::all();
        return view('layouts.business.business', compact('businesses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.business.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $business = new Business;
        $business->name = $request->name;
        $business->nit = $request->nit;
        $business->city = $request->city;
        $business->save();

        return Redirect('/businesses')->with('message','Saved Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function show(Business $business)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $business = Business::find($id);
        return view('layouts.business.edit',compact('business'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $business = Business::find($id);
        $this->validate(request(), [
            'name' => 'required',
            'nit' => 'required',
            'city' => 'required',
        ]);
        $business->name = $request->name;
        $business->nit = $request->nit;
        $business->city = $request->city;
        $business->save();

        return Redirect('/businesses')->with('message','Saved Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Business  $business
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $business = Business::find($id);
        $business->delete();

        return redirect('/businesses');
    }
}
