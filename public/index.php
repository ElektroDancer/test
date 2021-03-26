<?php

namespace elektrodancer\test;

require_once(__DIR__ . '/../vendor/autoload.php');

$factory = new Factory();

$app = $factory->createApplication();

echo $app->run();