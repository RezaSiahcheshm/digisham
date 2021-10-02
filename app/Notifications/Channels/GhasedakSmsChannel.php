<?php

namespace App\Notifications\Channels;

use Exception;
use Illuminate\Notifications\Notification;

class GhasedakSmsChannel
{
    use sendGhasedakSMS;

    public function send($notifiable , Notification $notification)
    {
        if(!method_exists($notification , 'toGhasedakSms')) {
            throw new Exception('toGhasedakSms not found');
        }
        $code =$notification->toGhasedakSms($notifiable)['code'];
        $receptor = $notification->toGhasedakSms($notifiable)['mobile'];
        $this->sendGhasedakSMS($receptor, $code);
    }
}