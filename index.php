<?php

require $_SERVER['DOCUMENT_ROOT'] . '/app/autoload.php';

$factory = new FactoryRobot();

$factory->addType(new Robot1());
$factory->addType(new Robot2());
$factory->createRobot2(5);


$unionRobot = new UnionRobot();
$unionRobot->addRobot(new Robot2());

$unionRobot->addRobot($factory->createRobot2(2));

$factory->addType($unionRobot);
$result = reset($factory->createUnionRobot(1));

//echo '<pre>';
//var_dump($result);
//echo '</pre>';

echo 'Speed - ' . $result->getSpeed() . '<br />';
echo 'Height - ' . $result->getHeight() . '<br />';
echo 'Weight - ' . $result->getWeight() . '<br />';