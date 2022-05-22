<?php

namespace App\Http\Controllers;

use App\Models\Images;
use App\Http\Requests\StoreImagesRequest;
use App\Http\Requests\UpdateImagesRequest;
use Illuminate\Http\Request;
class ImagesController extends Controller
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
        return view('images.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreImagesRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
        
        $validator=$request->validate([
            'img_up.*'=>'required|mimes:jpg,jpeg ,png',
        ]);
      

        if($request->hasFile('img_up')){

            $filepathorlocation = 'uploads';

            $all_files = $request->file('img_up');
            foreach($all_files as $file){

           
           $ext= $file->getClientOriginalExtension();
            $filename = rand().".".$ext;

            $file->move($filepathorlocation,$filename);
        }
            // Images::create(request(['img_up']));
            return back();

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Images  $images
     * @return \Illuminate\Http\Response
     */
    public function show(Images $images)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Images  $images
     * @return \Illuminate\Http\Response
     */
    public function edit(Images $images)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateImagesRequest  $request
     * @param  \App\Models\Images  $images
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImagesRequest $request, Images $images)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Images  $images
     * @return \Illuminate\Http\Response
     */
    public function destroy(Images $images)
    {
        //
    }
}
