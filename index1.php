<?php

$dir = new DirectoryIterator('./');
foreach ($dir as $fileinfo) {
    echo $fileinfo->getPathname() . "\n";
}