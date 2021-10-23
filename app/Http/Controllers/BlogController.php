<?php

namespace App\Http\Controllers;
use App\Models\siteconfig;
use App\Models\coursecat;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            if (session()->has('LoggedUser')) {
             $blog=blog::paginate(8);
        return view('admin.blog.index',compact('blog'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }
    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');
        $categories = Coursecat::all();
        $sites = SiteConfig::all();
        $blog1 = Blog::orderBy('created_at','desc')->limit(5)->get();

        // Search in the title and body columns from the posts table
        $blogs = blog::query()
            ->where('tittle', 'LIKE', "%{$search}%")
            ->paginate(4);

        // Return the search view with the resluts compacted
        return view('blog', compact('blogs', 'categories','sites','blog1'));
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
            'tittle'=>'required',
              'text'=>'required',
              'img_link'=>'required',
              'details'=>'required',
              'status'=>'required',

        ]));

        $blog=new Blog([
            'tittle'=>$request->get('tittle'),
             'text'=>$request->get('text'),
               'img_link'=>$request->get('img_link'),
               'details'=>$request->get('details'),
                  'status'=>$request->get('status'),
        ]);
        $blog->save();
        return redirect()->route('blog.index')->with('success','Blog added successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
         return view('admin.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        $request->validate([
            'tittle'=>'required',
              'text'=>'required',
              'img_link'=>'required',
              'details'=>'required',
              'status'=>'required',

      ]);
      $blog->update($request->all());
      return redirect()->route('blog.index')->with('update','blog updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
          $blog->delete();
        return redirect('blog')->with('delete', 'Deleted successfully');
    }
}
