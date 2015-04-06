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

    public function skillSearch()
    {
        $projects = Project::all()->filter(function ($project) {
            $skills = Input::get('skills');
            foreach ($project->skills as $projectSkill) {
                if(is_array($skills))
                {
                    foreach ($skills as $userSkill) {
                        if ($projectSkill->name === $userSkill) {
                            return true;
                        }
                    }
                }

            }
        });

        return View::make('projects.projects')->with("title", "Projects")->with('projects', $projects);
    }
    public function popularSkills($skill)
    {
        $projects = Project::all()->filter(function ($project) {
            foreach ($project->skills as $projectSkill) {
               if ($projectSkill->name === Route::input('skill')) {
                            return true;
               }
            }
        });

        return View::make('projects.projects')->with("title", "Projects")->with('projects', $projects);
    }
    public function joinedProjects() // returns the projects the student is accepted to
    {
        $all = Auth::user()->projects;

        $projects = $all->filter(function ($project) {
            if ($project->pivot->accepted == 1) {
                return true;
            }
        });

        return View::make('projects.projects')->with("title", "joined Projects")->with('projects', $projects);
    }
    public function recommendedProjects()
    {

        $projects = Project::all()->filter(function ($project) {

                foreach ($project->skills as $projectSkill) {
                    foreach (Auth::user()->skills as $userSkill) {
                        if ($projectSkill->name === $userSkill->name && !$project->users->contains(Auth::user()->userId)) {
                            return true;
                        }
                    }
                }

        });
        /*

        $userSkills = Auth::user()->skills;

        $projects = Project::with('skills')->get();


        $projects->sort(function ($a, $b) use ($userSkills) {

            $aMatchingSkills = $a->skills->intersect($userSkills);
            $bMatchingSkills = $b->skills->intersect($userSkills);

            // Return the count of A minus the count of B
            return $aMatchingSkills->count() - $bMatchingSkills->count();
        });
        */
        return View::make('projects.recommendedProjects')->with("title", "Recommended Projects")->with('projects', $projects);
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
        //$project->skills = serialize($skillArray);
        $project->centre = Input::get("centre");
        $project->projectPartner = Input::get("projectPartner");
        $project->save();
        foreach ($skillArray as $skill) {
            if($skill !== "")
            {
                $sk = new Skill();
                $sk->name = $skill;
                $sk->save();

                $project->skills()->attach($sk->id);
            }


        }

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
        $project->centre = Input::get("centre");
        $project->projectPartner = Input::get("projectPartner");

        $skillArray = explode(',', Input::get('hidden-tags'));
        //$project->skills = serialize($skillArray);

        $project->skills()->detach();

        if (Input::hasFile('file')) {
            $file = Input::file('file');
            $destinationPath = public_path() . '/uploads/';
            $filename = $file->getClientOriginalName();
            Input::file('file')->move($destinationPath, $filename);

            $project->attachment = '/uploads/' . $filename;
            $project->attachmentName = $filename;
        }

        $project->save();

        foreach ($skillArray as $skill) {
            if($skill !== "")
            {
                $sk = new Skill();
                $sk->name = $skill;
                $sk->save();

                $project->skills()->attach($sk->id);
            }


        }
        $project->save();


        return Redirect::to('projects/viewProject/' . $project->id);

    }
    public function deleteProject($id)
    {
        $project = Project::findOrFail($id);
        $project->users()->detach();
        $project->skills()->detach();
        $project->delete();

        return Redirect::to('projects')->with('title',"Projects");
    }

    public function applyForProject($id)
    {
        $project = Project::findOrFail($id);

        if(!$project->users->contains(Auth::user()->userId))
        {
            $project->users()->attach(Auth::user()->userId, array('accepted' => 0));
            $fname = Auth::user()->profile->firstName;
            $lname = Auth::user()->profile->lastName;

            $notif = new Notification();
            $notif->userId = $project->user->userId ; // who to send notification to.
            $notif->project_id = $project->id;
            $notif->applicantId = Auth::user()->userId; //user that's applying
            $notif->title = "Project Application";
            $notif->message = "$fname $lname has applied to $project->name";
            $notif->project_application = 1;
            $notif->save();
        }
        else
        {
            Session::flash("message","You have already applied for this project!");
            return Redirect::to('projects/viewProject/' . $project->id);
        }

        Session::flash("message","You have successfuly applied for this project, you will be notified when your application is processed");
        return Redirect::to('projects/viewProject/' . $project->id);
    }

    public function acceptUser($userId, $projectId)
    {
        $user = User::findOrFail($userId);
        $project = Project::findOrFail($projectId);

        // this finds the creator of the project and deletes their notification after they accept or deny it
        $creatorNotifications = $project->user->notifications;

        // this finds the creator of the project and deletes their notification after they accept or deny it
        $creatorNotifications = $project->user->notifications;

        if ($creatorNotifications != null) {
            foreach ($creatorNotifications as $notif) {
                if ($notif->applicantId == $userId && $notif->project_id == $projectId && $notif->project_application == 1) {
                    $notif->delete();
                }
            }

        }



        $project->users()->updateExistingPivot($user->userId, array('accepted' => 1));
        Session::flash('message','User accepted to project');

        $notif = new Notification();
        $notif->userId = $user->userId;
        $notif->project_id = $project->id;
        $notif->title = "Accepted";
        $notif->message = "You have been accepted to $project->name";
        $notif->accepted_to_project = 1;
        $notif->save();

        return Redirect::to('projects/viewProject/' . $project->id);
    }

    public function denyUser($userId, $projectId)
    {
        $user = User::findOrFail($userId);
        $project = Project::findOrFail($projectId);

        // this finds the creator of the project and deletes their notification after they accept or deny it
        $creatorNotifications = $project->user->notifications;

        if ($creatorNotifications != null) {
            foreach ($creatorNotifications as $notif) {
                if ($notif->applicantId == $userId && $notif->project_id == $projectId && $notif->project_application == 1) {
                    $notif->delete();
                }
            }

        }

        $notif = new Notification();
        $notif->userId = $userId;
        $notif->project_id = $projectId;
        $notif->title = "Application Denied";
        $notif->message = "Your appilication to $project->name has been denied";
        $notif->denied_from_project = 1;
        $notif->save();

        $project->users()->detach($user->userId);
        Session::flash('message', 'User Denied!');

        return Redirect::to('projects/viewProject/' . $project->id);
    }

    public function removeUser($userId, $projectId)
    {
        $user = User::findOrFail($userId);
        $project = Project::findOrFail($projectId);

        $notif = new Notification();
        $notif->userId = $userId;
        $notif->project_id = $projectId;
        $notif->title = "Removed From Project";
        $notif->message = "You have been removed from $project->name ";
        $notif->denied_from_project = 1;
        $notif->save();

        $project->users()->detach($user->userId);
        Session::flash('message', 'User removed!');

        return Redirect::to('projects/viewProject/' . $project->id);
    }
}
