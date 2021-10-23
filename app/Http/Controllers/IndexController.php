<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Results;
use App\Models\News;
use App\Models\SiteConfig;
use App\Models\Slider;
use App\Models\WhyChooseUs;
use App\Models\Index;
use App\Models\Blog;
use App\Models\Contact;
use App\Models\Course;
use App\Models\Coursecat;
use App\Models\Gallery;
use App\Models\Message;
use App\Models\Notice;

use App\Models\Teacher;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $sliders = Slider::all();
 $categories = Coursecat::all();
        $whychooseus = WhyChooseUs::all();

        $events = Event::paginate(2);
        $blogs=Blog::all();

        $newses = News::paginate(2);
        $sites = SiteConfig::all();

        return view('index', compact('sliders', 'whychooseus', 'events', 'newses', 'sites','categories','blogs'));
    }



    public function about_us()
    {
 $categories = Coursecat::all();
        $sites = SiteConfig::all();
        return view('aboutus', compact('sites','categories'));
    }


    public function messages()
    {
 $categories = Coursecat::all();
        $sites = SiteConfig::all();
        return view('message', compact('sites','categories'));
    }


    public function planning()
    {
 $categories = Coursecat::all();
        $sites = SiteConfig::all();
        $courses=Course::all();
        return view('planning', compact('sites','categories','courses'));
    }


    public function notice()
    {
         $categories = Coursecat::all();
         $sites = SiteConfig::all();
        $notices = Notice::paginate(5);
        $notice1 = Notice::orderBy('created_at','desc')->limit(5)->get();

        return view('notice', compact('notices','sites','categories','notice1'));
    }


    public function notice_details($id)
    {
        $notice_details = Notice::find($id);
         $categories = Coursecat::all();
 $sites = SiteConfig::all();

 $notice1 = Notice::orderBy('created_at','desc')->limit(5)->get();
        return view('notice_details', compact('notice_details','sites','categories','notice1'));
    }


    public function results()
    {
        $results = Results::paginate(5);
         $sites = SiteConfig::all();
          $categories = Coursecat::all();
          $result1 = Results::orderBy('created_at','desc')->limit(5)->get();
        return view('result', compact('results','sites','categories','result1'));

    }


    public function course($id)
    {
// $id=request()->segment(1);
       //$courses = Course::find($id);
        $categories = Coursecat::all();
       // return $courses;
$course=Course::where('c_id',$id)->paginate(12);

 $sites = SiteConfig::all();

        return view('course', compact('course', 'categories','sites'));
    }

        public function course_details($id)
    {
        // $course_detail=Course::where('status',1)->get();
        $course_detail = Course::find($id);
$courses = Course::all();
         $categories = Coursecat::all();
         $sites = SiteConfig::all();

        return view('course_details', compact('course_detail','sites','categories','courses'));
    }


    public function teacher()
    {
        $teachers = Teacher::paginate(6);
 $sites = SiteConfig::all();
  $categories = Coursecat::all();
        return view('teacher', compact('teachers','sites','categories'));
    }

      public function teacher_details($id)
    {
        $teacher_detail = Teacher::find($id);
 $sites = SiteConfig::all();
 $categories = Coursecat::all();
 $courses= Course::all();
        return view('teacher_details', compact('teacher_detail','sites','categories','courses'));
    }


    public function news()
    {
        $newses = News::paginate(6);
 $sites = SiteConfig::all();
  $categories = Coursecat::all();
  $news1 = News::orderBy('created_at','desc')->limit(5)->get();

        return view('news', compact('newses','sites','categories','news1'));
    }


    public function gallery()
    {
        $galleries = Gallery::paginate(12);
         $categories = Coursecat::all();
 $sites = SiteConfig::all();
        return view('gallery', compact('galleries','sites','categories'));
    }


    public function event()
    {
        $Events = Event::paginate(12);
 $sites = SiteConfig::all();
  $categories = Coursecat::all();

        return view('event', compact('Events','sites','categories'));
    }


    public function event_details($id)
    {
        $event_details = Event::find($id);
 $sites = SiteConfig::all();
  $categories = Coursecat::all();
  $event1 = Event::orderBy('created_at','desc')->limit(5)->get();

        return view('event_details', compact('event_details','sites','categories','event1'));
    }

      public function news_details($id)
    {
        $news_details = News::find($id);
 $sites = SiteConfig::all();
  $categories = Coursecat::all();
  $newses=News::all();
  $news1 = News::orderBy('created_at','desc')->limit(5)->get();

        return view('news_details', compact('news_details','sites','categories','newses','news1'));
    }


    public function blog()
    {
        $blogs = Blog::paginate(4);
        $blog = Blog::all();
 $sites = SiteConfig::all();
  $categories = Coursecat::all();
  $blog1 = Blog::orderBy('created_at','desc')->limit(5)->get();

        return view('blog', compact('blogs','sites','categories','blog1'));
    }


      public function blog_details($id)
    {
        $blog_details = Blog::find($id);
 $sites = SiteConfig::all();
  $categories = Coursecat::all();
  $blog1 = Blog::orderBy('created_at','desc')->limit(5)->get();

        return view('blog_details', compact('blog_details','sites','categories','blog1'));
    }


    public function contacts()
    {
$sites = SiteConfig::all();
 $categories = Coursecat::all();
        return view('contact', compact('sites','categories'));
    }

    public function admission()
    {
$sites = SiteConfig::all();
 $categories = Coursecat::all();
        return view('admission', compact('sites','categories'));
    }


    public function whychooseus()
    {
        $whychooseus = WhyChooseUs::where('status', 1)->orderBy('id', 'asc')->limit(1)->get();

        return view('whychooseus', compact('whychooseus'));
    }


}
