<?php

namespace App\Notifications;

class SMSNotification extends BasicNotification
{
    public function notification($message): string
    {
        return "SMS ".parent::notification($message);
    }
}