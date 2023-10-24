<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PageController extends Controller
{
    public function home()
    {
        $biodata = File::json(storage_path('data/biodata.json'));
        return view('home', compact('biodata'));
    }

    public function projects()
    {
        $projects = File::json(storage_path('data/projects.json'));
        return view('projects', compact('projects'));
    }

    public function projectDetails($id)
    {
        $projects = File::json(storage_path('data/projects.json'));

        $matchedProjects = array_filter($projects, function ($project) use ($id) {
            return $project['id'] == $id;
        });

        if (count($matchedProjects) == 0) {
            abort(404);
        } else {
            $project = $matchedProjects[array_key_first($matchedProjects)];
        }

        return view('project-details', compact('project'));
    }

    public function workExperiences()
    {
        $workExperiences = File::json(storage_path('data/work-experiences.json'));
        return view('work-experiences', compact('workExperiences'));
    }
}