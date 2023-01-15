<?php

namespace App\Adapters;

use App\Actions\SquareAreaLib;
use App\Interfaces\ISquare;

class SquareAdapter implements ISquare
{
    function squareArea(int $sideSquare)
    {
        $adapterClass = new SquareAreaLib();
        return $adapterClass->getSquareArea($sideSquare*sqrt(2));
    }
}