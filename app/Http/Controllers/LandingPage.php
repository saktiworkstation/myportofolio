<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class LandingPage extends Controller
{
    public function index(){
        return view('landing-page', [
            'projects' => Project::latest()->get(),
        ]);
    }
}
