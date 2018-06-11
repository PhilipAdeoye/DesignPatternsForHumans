<?php 

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

/*
 * Abstract Factory
 * https://github.com/kamranahmedse/design-patterns-for-humans/blob/master/README.md#-abstract-factory
 * 
 * A factory of factories; a factory that groups the individual but 
 * related/dependent factories together without specifying their concrete classes
 */

require_once 'factories.php';

// Wooden door
$wooden_door_factory = new AbstractFactory\WoodenDoorFactory();
$wooden_door = $wooden_door_factory->make_door();
$wooden_door_fitter = $wooden_door_factory->make_fitting_expert();

echo $wooden_door->get_description() . PHP_EOL;
echo $wooden_door_fitter->get_description() . PHP_EOL;

echo PHP_EOL;

// Iron door
$iron_door_factory = new AbstractFactory\IronDoorFactory();
$iron_door = $iron_door_factory->make_door();
$iron_door_fitter = $iron_door_factory->make_fitting_expert();

echo $iron_door->get_description() . PHP_EOL;
echo $iron_door_fitter->get_description(). PHP_EOL;

echo PHP_EOL;

// Steel door
$steel_door_factory = new AbstractFactory\SteelDoorFactory();
$steel_door = $steel_door_factory->make_door();
$steel_door_fitter = $steel_door_factory->make_fitting_expert();

echo $steel_door->get_description() . PHP_EOL;
echo $steel_door_fitter->get_description(). PHP_EOL;

echo PHP_EOL;



