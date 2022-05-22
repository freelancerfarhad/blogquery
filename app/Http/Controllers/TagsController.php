<?php

namespace App\Http\Controllers;

use App\Models\Tags;
use App\Http\Requests\StoreTagsRequest;
use App\Http\Requests\UpdateTagsRequest;
use Illuminate\Http\Request;
class TagsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tags=Tags::all();
        return view('tags.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTagsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'tags' => 'required',
        ]);
        Tags::create($validated);
        return back()->with('success','tags inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function show($tags)
    {
        $tags=Tags::where('tags',$tags)->first();
        return view('tags/show',compact('tags'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function edit(Tags $tags)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTagsRequest  $request
     * @param  \App\Models\Tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTagsRequest $request, Tags $tags)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tags  $tags
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tags $tags)
    {
        //
    }
}
