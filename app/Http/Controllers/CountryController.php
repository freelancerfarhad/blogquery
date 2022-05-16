<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;
use App\Models\countryuse;
use App\Http\Requests\UpdateCountryRequest;

class CountryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $country = Country::all();
       
        return view('country.index',compact('country'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('country.home');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCountryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $name=request('name');
        // $capital=request('capital');
        // $currence=request('currence');
        // $population=request('population');

        // $name=request()->input('name');
        // $capital=request()->input('capital');
        // $currence=request()->input('currence');
        // $population=request()->input('population');

        // $name=$request->input('name');
        // $capital=$request->input('capital');
        // $currence=$request->input('currence');
        // $population=$request->input('population');

        //__insert__//
        
        // Country::create([
        //     'name'=>$name,
        //     'capital'=>$capital,
        //     'currence'=>$currence,
        //     'population'=>$population
        // ]);

        // $country = new Country;
        // $country->name=$name;
        // $country->capital=$capital;
        // $country->currence=$currence;
        // $country->population=$population;
        // $country->save();
        Country::create($request->all());

        return redirect('/country');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      
        $country=Country::find($id);
        // $countryuser=countryuse::where('country_id',$country->id)->get();//sudu model dhara data show kora jai....eidt country model
        return view('country.views',compact('country'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */


    public function edit(Country $country)
    {
          // $country=Country::find($id);// function $id dite hobe r route theke {id} bad dite country dite hobe than run
      
        return view('country.editpst',compact('country'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCountryRequest  $request
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $country=Country::find($id);
        $name=request()->input('name');
        $capital=request()->input('capital');
        $currence=request()->input('currence');
        $population=request()->input('population');

      
         
        // $country->name=$name;
        // $country->capital=$capital;
        // $country->currence=$currence;
        // $country->population=$population;
        // $country->save();
        $country->update([
            'name'=>$name,
            'capital'=>$capital,
            'currence'=>$currence,
            'population'=>$population

        ]);
        return redirect('/country');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Country  $country
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $country=Country::find($id);
        $country->delete();
        return back();
    }
}
