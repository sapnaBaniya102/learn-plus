<?php

namespace App\Http\Controllers;

use App\Models\Gallery;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $gallery=Gallery::all();
        return view('admin.gallery.index',compact('gallery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request-> validate([
             'name' => 'required',
            'status'=> 'required',
            'img_link'=> 'required',

        ]

        );
        $gallery=new Gallery([
            'name'=> $request-> get('name'),
            'status'=> $request->get('status'),
            'img_link'=> $request->get('img_link'),
        ]);
        $gallery->save();
        return redirect('gallery')->with('sucess', 'Gallery sucessfully created');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Gallery $gallery)
    {
         return view('admin.gallery.show', compact('gallery'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Gallery $gallery)
    {
        return view('admin.gallery.edit', compact('gallery'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gallery $gallery)
    {

        $request->validate([
            'name'=>'required',
            'status'=>'required',
             'img_link'=>'required',
        ]);

        $gallery->update($request->all());
        return redirect()->route('gallery.index')->with('update','updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Gallery  $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Gallery $gallery)
    {
         $gallery->delete();
        return redirect('gallery')->with('deleted', 'deleted succesfully');
    }

}
