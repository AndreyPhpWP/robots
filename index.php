<?php

require $_SERVER['DOCUMENT_ROOT'] . '/app/autoload.php';

$factory = new FactoryRobot();

$factory->addType(new Robot1());
$factory->addType(new Robot2());

var_dump($factory->createRobot1(5));
var_dump($factory->createRobot2(2));