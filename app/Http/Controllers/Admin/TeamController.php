<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Http\Controllers\Admin\TeamController;
use App\Models\Team;


class TeamController extends Controller
{
    public function index() {
        $team=Team::all();
        return view('admin.team.index', compact('team'));
    }

    public function create() {
        return view('admin.team.create');
    }

    public function store(Request $request) {
        
        $team = new Team;

        $team->name=$request->get('name');
        $team->designation=$request->get('designation');
        $team->description=$request->get('description');
        
        if ($request->hasfile('image')) {

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/highlights/', $filename);
            $team->image = $filename;
        }
        else{
            return redirect('admin/add-team');
        }

        $team->gender=$request->get('gender');
        $team->number=$request->get('number');
        $team->join=$request->get('join');


        $team->save();

        return redirect('admin/view-team')->with('msg','Team Data added Successfully');
    }

    public function edit($team_id) {
        $team = Team::find($team_id); 
        return view('admin.team.edit', compact('team'));
    }
    

    public function update(Request $request, $team_id) {
        
        $team = Team::find($team_id); 

        $team->name=$request->get('name');
        $team->designation=$request->get('designation');
        $team->description=$request->get('description');
        
        if ($request->hasfile('image')) {

            $destination = 'uploads/highlights/'.$team->imgae;
            if(File::exists($destination)) {
                File::delete($destination);
            }

            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension(); //getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/highlights/', $filename);
            $team->image = $filename;
        }
        else{
            return $request;
            $highlights->image = '';
        }

        $team->gender=$request->get('gender');
        $team->number=$request->get('number');
        $team->join=$request->get('join');


        $team->update();

        return redirect('admin/view-team')->with('message','Team Data Updated successfully');
    }

    public function destroy($team_id)
    {
        $team=Team::find($team_id);
        if ($team)
        {
            $team->delete();
            return redirect('admin/view-team')->with('message','team Deleted successfully');
        }
        else
        {
            return redirect('admin/view-team')->with('message','NO team Id found');
        }
    }

    
}
