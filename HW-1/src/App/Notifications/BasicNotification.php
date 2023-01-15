<?php

namespace App\Notifications;

use App\Interfaces\NotificationInterface;

class BasicNotification implements NotificationInterface
{
    protected $notification;

    public function __construct(NotificationInterface $notification)
    {
        $this->notification = $notification;
    }

    public function notification($message): string
    {
        return $this->notification->notification($message);
    }
}