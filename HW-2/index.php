<?php

use App\Adapters\CircleAdapter;

require_once __DIR__.'/vendor/autoload.php';

$AreaCircle = new CircleAdapter();
echo $AreaCircle->circleArea(50);