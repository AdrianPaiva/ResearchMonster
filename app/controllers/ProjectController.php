<?php

class ProjectController extends BaseController {


	public function showAllProjects()
	{
        $title = "Projects";


        $projects = Project::all();


		return View::make('projects.projects')->with("title",$title)->with('projects',$projects);
	}

    public function createdProjects()
    {
        $projects = Project::where('userId', '=', Auth::user()->userId)->get();

        return View::make('projects.projects')->with("title", "Created Projects")->with('projects', $projects);

    }
    public function viewProject($id)
    {

        $project = Project::findOrFail($id);
        $title = $project->name;

        return View::make('projects.viewProject')->with("title",$title)->with("project",$project);
    }

    public function addProject()
    {

        $rules = [
            'name' => 'required|unique:projects',
            'summary' => 'required',
            'experience' => 'required'

        ];
        $input = Input::only(
            'name',
            'summary',
            'experience'
        );

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }


        $project = new Project;
        $project->name = Input::get('name');
        $project->postedBy = Auth::user()->profile->firstName . " " . Auth::user()->profile->lastName;
        $project->summary = Input::get('summary');
        $project->experience = Input::get('experience');
        $project->userId = Auth::user()->userId;
        $skillArray = explode(',', Input::get('hidden-tags'));
        $project->skills = serialize($skillArray);

        if (Input::hasFile('file')) {
            $file = Input::file('file');
            $destinationPath = public_path() . '/uploads/';
            $filename = $file->getClientOriginalName();
            Input::file('file')->move($destinationPath, $filename);

            $project->attachment = '/uploads/' . $filename;
            $project->attachmentName = $filename;
        }

        $project->save();


        return Redirect::to('projects/viewProject/'.$project->id);
    }
    public function editProject($id)
    {

        $project = Project::findOrFail($id);

        $rules = [
            'name' => "required|unique:projects,name,$project->id",
            'summary' => 'required',
            'experience' => 'required'

        ];
        $input = Input::only(
            'name',
            'summary',
            'experience'
        );

        $validator = Validator::make($input, $rules);

        if ($validator->fails()) {
            return Redirect::back()->withInput()->withErrors($validator);
        }



        if($project->name != Input::get('name'))
        {
            $project->name = Input::get('name');
        }

        $project->postedBy = Auth::user()->profile->firstName . " " . Auth::user()->profile->lastName;
        $project->summary = Input::get('summary');
        $project->experience = Input::get('experience');

        $skillArray = explode(',', Input::get('hidden-tags'));
        $project->skills = serialize($skillArray);

        if (Input::hasFile('file')) {
            $file = Input::file('file');
            $destinationPath = public_path() . '/uploads/';
            $filename = $file->getClientOriginalName();
            Input::file('file')->move($destinationPath, $filename);

            $project->attachment = '/uploads/' . $filename;
            $project->attachmentName = $filename;
        }

        $project->save();


        return Redirect::to('projects/viewProject/' . $project->id);

    }
    public function deleteProject($id)
    {
        $project = Project::findOrFail($id);
        $project->users()->detach();
        $project->delete();

        return Redirect::to('projects')->with('title',"Projects");
    }

    public function applyForProject($id)
    {
        $project = Project::findOrFail($id);

        if(!$project->users->contains(Auth::user()->userId))
        {
            $project->users()->attach(Auth::user()->userId, array('accepted' => 0));
        }
        else
        {
            Session::flash("message","You have already applied for this project!");
            return Redirect::to('projects/viewProject/' . $project->id);
        }

        Session::flash("message","You have successfuly applied for this project, you will be notified when your application status changes");
        return Redirect::to('projects/viewProject/' . $project->id);
    }

    public function acceptUser($userId, $projectId)
    {
        $user = User::find($userId);
        $project = Project::find($projectId);

        $project->users()->updateExistingPivot($user->userId, array('accepted' => 1));
        Session::flash('message','User accepted to project');

        return Redirect::to('projects/viewProject/' . $project->id);
    }

    public function removeUser($userId, $projectId)
    {
        $user = User::find($userId);
        $project = Project::find($projectId);

        $project->users()->detach($user->userId);
        Session::flash('message', 'User removed!');

        return Redirect::to('projects/viewProject/' . $project->id);
    }
}
