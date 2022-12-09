<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Testimonial;
use App\Models\Member;
use App\Models\Merchandies;
use App\Models\Event;

class FrontendController extends Controller
{
    //
    public function index(){
        $testimonial = Testimonial::all();

        $member = Member::where('type','=','executive')->get();

        return view('home', compact('testimonial', 'member'));
    }

    public function blogs(){
        $blog = Blog::all();

        return view('blog', compact('blog'));
    }

    public function members(){
        $members = Member::all();

        return view('members', compact('members'));
    }

    public function merchandies(){
        $merchandies = Merchandies::all();

        return view('merchandies',compact('merchandies'));
    }

    public function events(){
        $upcomming = Event::where('', '=', '');
    }


}
