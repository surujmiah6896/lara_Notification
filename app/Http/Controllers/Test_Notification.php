<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\TestNotification;
use Illuminate\Support\Facades\Notification;

class Test_Notification extends Controller
{
    public function send_notification(){
        $users = User::all();
        // $user = User::find(1);
        foreach($users as $user){
            //send with notify
            // $user->notify(new TestNotification());
            //send with Notifiable
            Notification::send($users, new TestNotification());



        }
        return back();
    }
}
