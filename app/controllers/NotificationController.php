<?php

class NotificationController extends BaseController{

    public function showNotifications()
    {
        $title = "Notifications";
        return View::make("dashboard.notifications")->with("title",$title);
    }
}