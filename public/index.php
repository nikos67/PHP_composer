<?php


require_once __DIR__.'/../vendor/autoload.php';

use app\wcs\hello;

$hello = new hello();

print $hello->talk();

