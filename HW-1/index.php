<?php

use App\Notifications\BasicNotification;
use App\Notifications\EmailNotification;
use App\Notifications\PushNotification;
use App\Notifications\SMSNotification;
use App\SimpleNotification;

require_once __DIR__."/vendor/autoload.php";

function getNotification($text, $decorator): void
{
    echo "Messagers and the message are:";
    echo $decorator->notification($text);
}

$textNotification = new SimpleNotification();
$basicNotification = new BasicNotification($textNotification);
$emailNotification = new EmailNotification($textNotification);
$smsNotification = new SMSNotification($textNotification);
$pushNotification = new PushNotification($textNotification);
$pushAndSMS = new PushNotification($smsNotification);

getNotification("Push and SMS message", $pushAndSMS);