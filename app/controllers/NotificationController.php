<?php

class NotificationController extends BaseController{

    public function showNotifications()
    {
        $title = "Notifications";
        $notif = Auth::user()->notifications;

        return View::make("dashboard.notifications")->with("title",$title)->with('notif',$notif);
    }
}