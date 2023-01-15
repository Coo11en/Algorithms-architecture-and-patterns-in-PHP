<?php

namespace App\Notifications;

class EmailNotification extends BasicNotification
{
    public function notification($message): string
    {
        return "Email ".parent::notification($message);
    }
}