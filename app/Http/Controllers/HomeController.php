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
}
