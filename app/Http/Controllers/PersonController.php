<?php

namespace App\Http\Controllers;

use App\Models\person;
use App\Models\imagefile;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatepersonRequest;
use DB;
class PersonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image=imagefile::find(1);
        return $image->load('imageable');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorepersonRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'path'  => 'required'
        ]);
        DB::transaction(function(){
            $person= person::create([
                'name'=>request()->input('name'),
                'email'=>request()->input('email')
            ]);
          
            $person->images()->create([
                'path'=>request()->input('path')
            ]);
        });
  
        return back();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\person  $person
     * @return \Illuminate\Http\Response
     */
    public function show(person $person)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\person  $person
     * @return \Illuminate\Http\Response
     */
    public function edit(person $person)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatepersonRequest  $request
     * @param  \App\Models\person  $person
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatepersonRequest $request, person $person)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\person  $person
     * @return \Illuminate\Http\Response
     */
    public function destroy(person $person)
    {
        //
    }
}
