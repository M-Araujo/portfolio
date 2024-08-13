<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    public function index()
    {
        $json = File::get(public_path('json_files/projects.json'));
        $projects = json_decode($json, true);

        // dd($projects);

        return view('portfolio.index', compact('projects'));
    }

    public function show($id)
    {
        $json = File::get(public_path('json_files/projects.json'));
        $projects = json_decode($json, true);
        $project = collect($projects)->firstWhere('id', $id);

        // If the project is not found, return a 404 error
        if (!$project) {
            abort(404, 'Project not found');
        }

        //  dd($project['title']);

        // Pass the project data to the view
        return view('portfolio.show', compact('project'));
    }
}
