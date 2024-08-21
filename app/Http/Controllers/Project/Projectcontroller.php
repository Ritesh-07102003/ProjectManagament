<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Projectcontroller extends Controller
{
    function index(){
        return view('projects.showProjects');
    }
    function add(){
        return view('projects.addProject');
    }

    function store(){
        return "Project added successfully";
    }
    public function edit($id){
        return view('projects.editProject');
    }
    public function update($id){
        return redirect('/showProject');
    }
    function deleteProject(){
        return "Project deleted successfully";
    }
}
