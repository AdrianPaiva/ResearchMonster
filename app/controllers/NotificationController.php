<?php

class NotificationController extends BaseController{

    public function showNotifications()
    {
        $title = "Notifications";
        $all = Auth::user()->notifications;

        $notif = $all->sortBy('created_at')->reverse();

        return View::make("dashboard.notifications")->with("title",$title)->with('notif',$notif);
    }

    public function deleteNotification($id)
    {
        $notification = Notification::findOrFail($id);
        $notification->delete();

        return Redirect::to("dashboard/notifications");
    }
}