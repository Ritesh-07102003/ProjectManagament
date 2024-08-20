<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Projectcontroller extends Controller
{
    function showProject(){
        return view('projects.showProjects');
    }
}
