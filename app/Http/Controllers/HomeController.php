<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Platform;
use App\Models\Project;
use App\Models\Slider;

class HomeController extends Controller {

    public function index()
    {
        $projects = Project::where('in_main', '=', '1')->where('status', '=', 'ACTIVE')->with('platform')->get();
        $platforms = Platform::with('projects')->get();
        $sliders = Slider::all();
        $clients = Client::all();
        return view('home.index', [
            'sliders'   => $sliders,
            'projects'   => $projects,
            'platforms'   => $platforms,
            'clients'   => $clients,
        ]);
    }

    public function about()
    {
        return view('home.about', [

        ]);
    }

    public function cases()
    {
        return view('home.cases', [

        ]);
    }

    public function case($id)
    {
        return view('home.case', [

        ]);
    }

    public function contact()
    {
        return view('home.contact', [

        ]);
    }




}
