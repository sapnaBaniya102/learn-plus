<?php

namespace App\Http\Controllers;

use App\Models\Chooseus;
use Illuminate\Http\Request;

class ChooseusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          $chooseus=Chooseus::all();
       return view('admin.chooseus.index',compact('chooseus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         return view('admin.chooseus.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate(([
            'heading'=>'required',
              'text'=>'required',

                  'status'=>'required',

        ]));

        $chooseus=new Chooseus([
            'heading'=>$request->get('heading'),
              'text'=>$request->get('text'),

                  'status'=>$request->get('status'),
        ]);
        $chooseus->save();
        return redirect()->route('chooseus.index')->with('success','chooseus added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chooseus  $chooseus
     * @return \Illuminate\Http\Response
     */
    public function show(Chooseus $chooseus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Chooseus  $chooseus
     * @return \Illuminate\Http\Response
     */
    public function edit(Chooseus $chooseus,$id)
    {
        $chooseus_detail = Chooseus::find($id)->firstOrFail();
         return view('admin.chooseusedit',compact('chooseus', 'chooseus_detail'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chooseus  $chooseus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chooseus $chooseus)
    {

      $request->validate([
              'heading'=>'required',
              'text'=>'required',
                  'status'=>'required',

        ]);
        $chooseus->update($request->all());
        return redirect()->route('chooseus.index',compact('chooseus'))->with('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chooseus  $chooseus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chooseus $chooseus)
    {

         $chooseus->delete();
        return redirect('chooseus')->with('delete', 'Deleted successfully');
    }
}
