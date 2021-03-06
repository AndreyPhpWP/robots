<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
require $_SERVER['DOCUMENT_ROOT'] . '/app/autoload.php';

use Symfony\Component\VarDumper\VarDumper;

if (!function_exists('dd')) {
    function dd($var)
    {
        foreach (func_get_args() as $var) {
            VarDumper::dump($var);
        }
        exit;
    }
}

$factory = new FactoryRobot();

$factory->addType(new Robot1());
$factory->addType(new Robot2());
$factory->createRobot2(5);


$unionRobot = new UnionRobot();
$unionRobot->addRobot(new Robot2());

$unionRobot->addRobot($factory->createRobot2(2));

$factory->addType($unionRobot);
$result = reset($factory->createUnionRobot(1));

dd($result);
//echo '<pre>';
//var_dump($result);
//echo '</pre>';

echo 'Speed - ' . $result->getSpeed() . '<br />';
echo 'Height - ' . $result->getHeight() . '<br />';
echo 'Weight - ' . $result->getWeight() . '<br />';