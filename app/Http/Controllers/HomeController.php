<?php

namespace App\Http\Controllers;

use App\Models\Course_outlines;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Course;
use App\Models\User;
use Illuminate\Support\Str;

use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       // $this->middleware('auth','verified');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { $this->middleware('auth');
        return view('home');
    }

    public function welcome(){

        if(Auth::check()){
            return redirect()->route('courses.index');
        }
        $categories = Category::all();
        $courses = Course::inRandomOrder()->get();
        $users = User::all();
        $course_outlines = Course_outlines::all();
        return view('index')->with('courses',$courses)
            ->with('categories', $categories)
            ->with('course_outlines', $course_outlines)
            ->with('users', $users);
    }
    public function home(){

        if(Auth::check()){
            return redirect()->route('courses.index');
        }
        $categories = Category::all();
        $courses = Course::inRandomOrder()->take(6)->get();
//        $courses = Course::latest()->take(6)->get();
        $users = User::all();
        $course_outlines = Course_outlines::all();
        return view('index')
            ->with('courses',$courses)
            ->with('course_outlines', $course_outlines)
            ->with('categories', $categories)
            ->with('users', $users);
    }
    public function contact(){

        if(Auth::check()){
            return redirect()->route('courses.index');
        }
        $categories = Category::all();
        $courses = Course::inRandomOrder()->get();
        $latestcourses = Course::latest()->get();

        return view('contact')->with('courses',$courses)->with('courses',$latestcourses)->with('categories', $categories);
    }
    public function blog(){

        if(Auth::check()){
            return redirect()->route('courses.index');
        }
        $categories = Category::all();
        $courses = Course::all();

        return view('blog')->with('courses',$courses)->with('categories', $categories);
    }
    public function course(){

        if(Auth::check()){
            return redirect()->route('courses.index');
        }
        $categories = Category::inRandomOrder()->get();
        $latestcourses = Course::latest()->take(4)->get();
        $courses = Course::inRandomOrder()->take(6)->get();
        $course_outlines = Course_outlines::all();
        return view('course')->with('courses',$courses)
            ->with('course_outlines', $course_outlines)
            ->with('latestcourses',$latestcourses)
            ->with('categories', $categories);
    }

    public function about(){

        if(Auth::check()){
            return redirect()->route('courses.index');
        }
        $categories = Category::all();
        $courses = Course::all();

        return view('about')->with('courses',$courses)->with('categories', $categories);
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'email'=>'required|email',
            'message'=>'required'
        ]);
    }

}
