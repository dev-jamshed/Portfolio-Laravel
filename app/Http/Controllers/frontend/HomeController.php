<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Client;
use App\Models\Counter;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Review;
use App\Models\Service;
use App\Models\Skill;

class HomeController extends Controller
{
    public function index(){

        $services = Service::where('show_on_homepage',1)->get();
        $skills = Skill::where('show_on_homepage',1)->get();
        $banner = Banner::first();
        $counters = Counter::all();
        $educations = Education::all();
        $experiences = Experience::all();
        $clients = Client::where('show_on_homepage',1)->get();
        $reviews = Review::with('service')->get();
        
        // dd($reviews);
        
        return view('frontend.pages.home',compact('services','skills','banner','counters','educations','experiences','clients','reviews'));
    }
}
