<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use App\Models\Client;
use App\Models\Counter;
use App\Models\Education;
use App\Models\Experience;
use App\Models\ExperienceYear;
use App\Models\Pricing;
use App\Models\Project;
use App\Models\Review;
use App\Models\Service;
use App\Models\ServiceSectionImage;
use App\Models\Skill;
use App\Models\SkillCategory;

class PageController extends Controller
{
    public function home(){

        $services = Service::where('show_on_homepage',1)->get();
        $serviceSectionImage = ServiceSectionImage::latest()->first();
        $latestServices = Service::where('show_on_homepage',1)->where('show_latest_service',1)->get();

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

    public function services(){
        $services = Service::where('show_on_homepage',1)->get();
        $pricing = Pricing::with('features')->get();
        // dd($beskSkils);
        return view('frontend.pages.services',compact('pricing','services'));
    }

    public function serviceDetail($id){
        $service = Service::with('category')->find($id);
        // dd($service);
        return view('frontend.pages.service-details',compact('service'));
    }

    public function projects(){
        $projects = Project::with('service')->get();
        // dd($projects);
        return view('frontend.pages.projects',compact('projects'));
    }

    public function projectDetail($id){
        $project = Project::with(['service','images','videos'])->find($id);
        // dd($project);
        return view('frontend.pages.project-details',compact('project'));
    }

    public function about(){
        
        $services = Service::where('show_on_homepage',1)->get();
        $skillCategory = SkillCategory::with('skills')->get();
        $counters = Counter::all();
        $counterExperience = ExperienceYear::first();
        $educations = Education::all();
        $experiences = Experience::all();
        $pricing = Pricing::with('features')->get();

     
        return view('frontend.pages.about',compact('pricing','services','skillCategory','counters','counterExperience','educations','experiences'));
    }

    public function contact(){
       
        return view('frontend.pages.contact');
    }
}
