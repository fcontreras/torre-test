<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Models\ProjectCategory;
use Illuminate\Http\Request;

class ProjectController extends Controller
{

    /**
     * Show the list of projects for the given user
     */
    public function list()
    {
        return view('project.list', [
            'projects' => Project::all()->sortDesc()
        ]);
    }

    /**
     * Shows a form to create a project
     */
    public function create()
    {
        return view('project.create', [
            'categories' => ProjectCategory::all()
        ]);
    }

    public function store(Request $request)
    {
        try {
            $project = new Project;
            $project->name = $request->get('input-project-name');
            $project->description = $request->get('input-project-description');
            $project->status = 'created';
            $project->project_category_id = $request->get('input-project-category');

            $project->save();

            return redirect('/')->with('success', 'Project created');

        } catch (\Exception $e) {
            return back()->withInput()->with('error', $e->getMessage());
        }
    }
}
