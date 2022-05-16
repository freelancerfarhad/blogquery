<?php

namespace App\Http\Controllers;

use App\Models\countryuse;
use App\Models\Country;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatecountryuseRequest;

class CountryuseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $countryuser=countryuse::all();
        return view('countryuser.show',compact('countryuser'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $countries = Country::all();
        return view('countryuser.create',compact('countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecountryuseRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        countryuse::create($request->all());
        return redirect('/countryuser');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\countryuse  $countryuse
     * @return \Illuminate\Http\Response
     */
    public function show(countryuse $countryuse)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\countryuse  $countryuse
     * @return \Illuminate\Http\Response
     */
    public function edit(countryuse $countryuse)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecountryuseRequest  $request
     * @param  \App\Models\countryuse  $countryuse
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatecountryuseRequest $request, countryuse $countryuse)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\countryuse  $countryuse
     * @return \Illuminate\Http\Response
     */
    public function destroy(countryuse $countryuse)
    {
        //
    }
}
