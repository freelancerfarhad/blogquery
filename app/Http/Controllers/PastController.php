<?php

namespace App\Http\Controllers;

use App\Models\Past;
use Illuminate\Http\Request;
use App\Http\Requests\UpdatePastRequest;

class PastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pasts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePastRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required',
            'path'  => 'required'
        ]);
       $person= Past::create([
            'title'=>$request->input('title')
        ]);
        $img_path=$request->input('path');

        $person->pasts()->create([
            'path'=>$img_path
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Past  $past
     * @return \Illuminate\Http\Response
     */
    public function show(Past $past)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Past  $past
     * @return \Illuminate\Http\Response
     */
    public function edit(Past $past)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePastRequest  $request
     * @param  \App\Models\Past  $past
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePastRequest $request, Past $past)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Past  $past
     * @return \Illuminate\Http\Response
     */
    public function destroy(Past $past)
    {
        //
    }
}
