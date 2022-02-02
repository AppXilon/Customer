<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Notifications\SendEmailReminder;
use Illuminate\Support\Facades\Notification;

class EmailController extends Controller
{
    //
    public function sendNotification(Request $request){
        $user = User::first();

        $orderData =[
            'body' => 'You received a new notifications',
            'orderText' => 'You have made an order in AppXilon',
            'url' => url('/'),
            'thankyou' => 'Thank You For Ordering With AppXilon'
        ];
        //$user->notify(new SendEmailReminder($orderData));
        Notification::send($user, new SendEmailReminder($orderData));
    }
}
