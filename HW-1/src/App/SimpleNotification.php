<?php

namespace App;

use App\Interfaces\NotificationInterface;

class SimpleNotification implements NotificationInterface
{
    public function Notification($message): string
    {
        return "[".$message."]";
    }
}