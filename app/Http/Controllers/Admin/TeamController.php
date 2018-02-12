<?php

namespace App\Http\Controllers\Admin;

use App\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class TeamController extends Controller
{
    public function show () {
        $teams = Team::teams();

        return view('admin.team.team', compact('teams'));
    }

    public function add ( Request $request) {


        if (!$request->name || !$request->position || !$request->image) {
            Session::flash('fail', 'Please fill all the information');

            return back();
        }

        $team = new Team;
        $team->name = $request->name;
        $team->position = $request->position;

        $image = $request->file('image');
        $filename  = time() . '.' . $image->getClientOriginalExtension();

        $path = public_path('uploads/');

        $image->move($path, $filename);

        $team->image = $filename;

        $team->save();

        Session::flash('success', 'Successfully added');

        return back();

    }

    public function update (Team $team, Request $request) {

        if (!$request->name || !$request->position) {
            Session::flash('fail', 'Please fill all the information');

            return back();
        }

        if ($request->image) {
            $image = $request->file('image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();

            $path = public_path('uploads/');

            $image->move($path, $filename);

            $team->image = $filename;

        }

        $team->name = $request->name;
        $team->position = $request->position;
        $team->save();

        Session::flash('success', 'Successfully updated');

        return back();

    }

    public function delete (Team $team) {

        $team->delete();

        Session::flash('success', 'Successfully Deleted');

        return back();
    }
}
