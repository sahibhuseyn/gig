<?php

namespace App\Http\Controllers\Admin;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ProjectController extends Controller
{
    public function show () {
        $projects = Project::projects();

        return view('admin.project.project', compact('projects'));
    }

    public function add ( Request $request) {


        if (!$request->name || !$request->position || !$request->image) {
            Session::flash('fail', 'Please fill all the information');

            return back();
        }

        $project = new Project;
        $project->name = $request->name;
        $project->pro_url = $request->pro_url;

        $image = $request->file('image');
        $filename  = time() . '.' . $image->getClientOriginalExtension();

        $path = public_path('uploads/');

        $image->move($path, $filename);

        $project->image = $filename;

        $project->save();

        Session::flash('success', 'Successfully added');

        return back();

    }

    public function update (Project $project, Request $request) {

        if (!$request->name || !$request->position) {
            Session::flash('fail', 'Please fill all the information');

            return back();
        }

        if ($request->image) {
            $image = $request->file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('uploads/');

            $image->move($path, $filename);

            $project->image = $filename;

        }

        $project->name = $request->name;
        $project->pro_url = $request->pro_url;
        $project->save();

        Session::flash('success', 'Successfully updated');

        return back();

    }

    public function delete (Project $project) {

        $project->delete();

        Session::flash('success', 'Successfully Deleted');

        return back();
    }
}
