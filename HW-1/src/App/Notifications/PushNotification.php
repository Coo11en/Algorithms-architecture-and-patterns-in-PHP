<?php

namespace App\Notifications;

class PushNotification extends BasicNotification
{
    public function notification($message): string
    {
        return "Push ".parent::notification($message);
    }
}