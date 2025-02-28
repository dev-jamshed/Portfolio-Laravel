<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Client;
use App\Models\Counter;
use App\Models\Education;
use App\Models\Experience;
use App\Models\ExperienceYear;
use App\Models\Review;
use App\Models\Service;
use App\Models\ServiceSectionImage;
use App\Models\Skill;
use App\Models\SkillCategory;

class HomeController extends Controller
{
    public function index(){

        $services = Service::where('show_on_homepage',1)->get();
        $latestServices = Service::where('show_on_homepage',1)->where('show_latest_service',1)->get();
        $serviceSectionImage = ServiceSectionImage::latest()->first();
        $banner = Banner::first();
        $counters = Counter::all();
        $educations = Education::all();
        $experiences = Experience::all();
        $counterExperience = ExperienceYear::first();
        $clients = Client::where('show_on_homepage',1)->get();
        $reviews = Review::with('service')->get();
        $skillCategory = SkillCategory::with('skills')->get();
        $beskSkils = Skill::where('show_on_homepage',1)->where('best_skill',1)->get();
        
        // dd($beskSkils);
        
        return view('frontend.pages.home',compact('services','latestServices','serviceSectionImage','skillCategory','beskSkils','banner','counters','counterExperience','educations','experiences','clients','reviews'));
    }
}
