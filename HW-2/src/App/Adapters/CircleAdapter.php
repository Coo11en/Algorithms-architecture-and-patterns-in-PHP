<?php

namespace App\Adapters;

use App\Actions\CircleAreaLib;
use App\Interfaces\ICircle;

class CircleAdapter implements ICircle
{

    function circleArea(int $circumference)
    {
        $adapterClass = new CircleAreaLib();
        echo $circumference/M_PI;
        return $adapterClass->getCircleArea($circumference/M_PI);
    }
}