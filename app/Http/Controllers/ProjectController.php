<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.project.index', [
            'projects' => Project::latest()->get(),
            'title' => 'Projects',
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.project.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'url' => 'required|url',
            'description' => 'required'
        ]);

        Project::create($validatedData);

        return redirect('/dashboard/projects')->with('success', 'New projet has been added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Project $project)
    {
        return view('dashboard.project.edit', [
            'project' => $project
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Project $project)
    {
        $rules = [
            'title' => 'required|max:255',
            'url' => 'required|url',
            'description' => 'required'
        ];

        $validatedData = $request->validate($rules);

        Project::where('id', $project->id)->update($validatedData);

        return redirect('/dashboard/projects')->with('success', 'Project has been chnged!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Project $project)
    {
        //
    }
}
