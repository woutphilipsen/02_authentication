<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserNotificationsController extends Controller
{
    public function show()
    {
        $notifications = auth()->user()->unreadNotifications;

        $notifications->markAsRead();

        return view('notifications.show', [
            'notifications' => $notifications
            // to make it more fancy add the next line off code & delete line 11, 13
            // 'notifications' => tap(auth()->user()->unreadNotifications)->markAsRead()
        ]);
    }
}
