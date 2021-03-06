<?php

namespace App\Http\Controllers;

use App\Experience;
use Illuminate\Http\Request;
use \Illuminate\Support\Facades\Input as Input;
use Illuminate\Support\Facades\URL;

class ExperienceController extends Controller
{
    public function index($user_id)
    {
        return view('experience.experience_create', compact('user_id'));

    }

    public function create($name)
    {
        $experience = Experience::where('name', $name)->first();
        return view('experience.experience', compact('experience'));


    }

    public function store(Request $request)
    {

        $experience = new Experience();
        $experience->name = $request->name;
        $continent_region = explode(" ", $request->continent_region);
        $experience->continent_id = $continent_region[0];
        $experience->region_id = $continent_region[1];
        $experience->activity_id = $request->activity_id;
        $experience->image = $request->image;
        $experience->user_id = $request->user_id;
        $experience->rating = '3';
        $experience->main_tags = $request->main_tags;
        $experience->people_who_did_it = 'we need an algoritm to calculate it';
        $experience->price = $request->price;
        $experience->currency = $request->currency;
        $experience->max_participants = $request->max_participants;
        $experience->video_id = $request->video_id;
        $experience->description = $request->description;
        $experience->offered = $request->offered;
        $experience->language = $request->language;
        $experience->sport_level = $request->sport_level;
        $experience->about_host = $request->about_host;
        $experience->what_we_do = $request->what_we_do;
        $experience->what_we_provide = $request->what_we_provide;
        $experience->who_can_come = $request->who_can_come;
        $experience->where_we_be = $request->where_we_be;
        $experience->gps_lng = $request->gps_lng;
        $experience->gps_lat = $request->gps_lat;
        if(Input::hasFile('image')){
            $experience->image = $request->image;
            $file = Input::file('image');
            $file->move('img', $file->getClientOriginalName());
        }
        $experience->save();
        return view('experience.experience', compact('experience'));

    }

    public function show()
    {
        return view('experience.experience');
    }


}
