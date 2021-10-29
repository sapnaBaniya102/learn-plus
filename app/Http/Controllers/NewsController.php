<?php

namespace App\Http\Controllers;
use App\Models\siteconfig;
use App\Models\coursecat;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $news=News::paginate(4);
        return view('admin.news.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.news.create');
    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
        $categories = Coursecat::all();
        $sites = SiteConfig::all();

        // Search in the title and body columns from the posts table
        $newses = News::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('date', 'LIKE', "%{$search}%")
            ->paginate(4);
            $news1 = News::orderBy('created_at','desc')->limit(5)->get();


        // Return the search view with the resluts compacted
        return view('news', compact('newses', 'categories','sites','news1'));
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
            'title'=>'required',
             'text'=>'required',
              'date'=>'required',

                 'details'=>'required',
                  'status'=>'required',
                     'imglink'=>'required',

        ]));

        $news=new News([
            'title'=>$request->get('title'),
             'text'=>$request->get('text'),
              'date'=>$request->get('date'),

                 'details'=>$request->get('details'),
                  'status'=>$request->get('status'),
                   'imglink'=>$request->get('imglink'),
        ]);
        $news->save();
        return redirect('news')->with('success','News added successfully');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        return view('admin.news.show',compact('news'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        return view('admin.news.edit',compact('news'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $request->validate([
               'title'=>'required',
             'text'=>'required',
              'date'=>'required',

                 'details'=>'required',
                  'status'=>'required',
                  'imglink'=>'required',


        ]);
        $news->update($request->all());
        return redirect()->route('news.index')->with('update','News updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();
        return $news;
        return redirect('news')->with('delete', 'Deleted successfully');
    }


}
