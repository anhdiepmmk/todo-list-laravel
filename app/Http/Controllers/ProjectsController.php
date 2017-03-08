<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index(){
        $projects  = Project::all();
        $message = 'hello';
        return view('projects.index', compact('projects','message'));
    }

    public function create(){

    }
}
