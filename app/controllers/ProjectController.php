<?php

class ProjectController extends BaseController {


	public function showAllProjects()
	{
        $title = "Projects";


        $projects = Project::all();


		return View::make('projects.projects')->with("title",$title)->with('projects',$projects);
	}
    public function viewProject($id)
    {

        $project = Project::findOrFail($id);
        $title = $project->name;

        return View::make('projects.viewProject')->with("title",$title)->with("project",$project);
    }
    public function showEditProject($id)
    {
        $title = 'Edit Project';
        return View::make('projects.editProject')->with("title", $title);
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

}
