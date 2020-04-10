<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Platform;
use App\Models\Project;
use App\Models\Slider;
use Telegram\Bot\Laravel\Facades\Telegram;

class HomeController extends Controller {

    public function index()
    {
        $clientIP  = \Request::ip();
        $text      = "Пользователь с IP: $clientIP вошел на сайт";
        $projects  = Project::where('in_main', '=', '1')->where('status', '=', 'ACTIVE')->with('platform')->get();
        $platforms = Platform::with('projects')->get();
        $sliders   = Slider::all();
        $clients   = Client::all();

        Telegram::sendMessage([
            'chat_id'    => -1001294566431,
            'parse_mode' => 'HTML',
            'text'       => $text
        ]);

        return view('home.index', [
            'sliders'   => $sliders,
            'projects'  => $projects,
            'platforms' => $platforms,
            'clients'   => $clients,
        ]);
    }

    public function about()
    {
        $clients = Client::all();
        return view('home.about', [
            'clients' => $clients
        ]);
    }

    public function cases()
    {
        $projects = Project::where('status', '=', 'ACTIVE')->with('platform')->paginate(10);
        return view('home.cases', [
            'projects' => $projects
        ]);
    }

    public function case($id)
    {
        $project = Project::where('id', '=', $id)->firstOrFail();
        return view('home.case', [
            'project' => $project
        ]);
    }

    public function contact()
    {
        return view('home.contact', []);
    }

    public function prices()
    {
        return view('home.prices',[]);
    }



}
