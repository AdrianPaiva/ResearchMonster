<?php

class RecommendationController extends BaseController{

    public function recommend($id)
    {
        $checkedUsers = Input::get('check');

        $project = Project::findOrFail($id);

        foreach($checkedUsers as $user)
        {
            $u = User::findOrFail($user);
            $project->recommendedUsers()->attach($u);


            $uFirstName = $u->profile->firstName; // students name
            $uLastName = $u->profile->lastName;

            $pFirstName = Auth::user()->profile->firstName; // professors name
            $pLastName = Auth::user()->profile->lastName;

            // notify project creator that user is recommended
            $notif = new Notification();
            $notif->userId = $project->user->userId; // project creator
            $notif->project_id = $project->id;
            $notif->applicantId = $u->userId; //user that's recommnded
            $notif->title = "User Recommendation";
            $notif->message = " $uFirstName $uLastName has been recommended by $pFirstName $pLastName for $project->name ";
            $notif->save();

            // notify the recommended student
            $notif2 = new Notification();
            $notif2->userId = $u->userId; // student being recommended
            $notif2->project_id = $project->id;
            $notif2->applicantId = $u->userId; //user that's recommnded
            $notif2->title = "Project Recommendation";
            $notif2->message = " You have been recommended by $pFirstName $pLastName for $project->name ";
            $notif2->save();
        }

        Session::flash('message',"Students recommended successfuly. The student(s) and the project creator will be notified of your recommendation.");
        return Redirect::Back();
    }
}