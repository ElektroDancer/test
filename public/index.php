<?php

namespace elektrodancer\test;

require_once(__DIR__ . '/../vendor/autoload.php');

$factory = new Factory();

$helloWorld = $factory->createHelloWorld();

echo 'Test';

var_dump($helloWorld->run());