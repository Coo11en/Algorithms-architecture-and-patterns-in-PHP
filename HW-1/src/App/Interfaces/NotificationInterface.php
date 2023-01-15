<?php

namespace App\Interfaces;
interface NotificationInterface
{
    public function notification($message): string;
}