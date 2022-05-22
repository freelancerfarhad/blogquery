<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Http\Requests\StoreVideoRequest;
use App\Http\Requests\UpdateVideoRequest;
use Illuminate\Http\Request;
use App\Models\Tags;
class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $videos=Video::all();
        return view('videos.index',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tags=Tags::all();
        return view('videos.create',compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVideoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        $validated = $request->validate([
            'url' => 'required',
            'video_path' => 'required',
        ]);

        $video=Video::create($validated);

        $tags=$request->tags;

        $tags=Tags::find($tags);
        $video->tags()->attach($tags);
        // return back();
        return redirect()->to('/videos')->with('success','video inserted successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function show($video_path)
    {
        $video=Video::where('video_path',$video_path)->first();
        // $video=Video::find($id);
        return view('videos.show',compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!Session()->has('user_name')){
            return back();
        }
        $video=Video::find($id);
        $tags=Tags::all();
        $selected_tags=$video->tags->pluck('id');//selected id 
        return view('videos.edit',compact('video','tags','selected_tags'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVideoRequest  $request
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
             //__dalidation__
        $validated = $request->validate([
            'url' => 'required|min:5',
            'video_path' => 'required',
        ]);
        $tags=$request->tags;
        //__diveo ar data tule anaholo__
        $video=Video::find($id);
        $video->update($validated);
        //__tags ar data
        $tags=Tags::find($tags);
        //__video update__
    
        $video->tags()->sync($tags);
        // return back();
        return redirect()->to('/videos')->with('success','video updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video  $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video)
    {
        //
    }
}
