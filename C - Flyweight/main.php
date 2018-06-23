<?php 

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

namespace Flyweight;

require_once 'ShapeFactory.php';

$blue_circle_1 = ShapeFactory::getShape(Circle::$name);
$blue_circle_1->setColor('Blue')->setCoordinates('X: 4, Y: 4, Radius: 5');
echo $blue_circle_1->draw(). PHP_EOL. PHP_EOL;

$green_circle_1 = ShapeFactory::getShape(Circle::$name);
$green_circle_1->setColor('Green')->setCoordinates('X: 4, Y: 4, Radius: 5');
echo $green_circle_1->draw(). PHP_EOL. PHP_EOL;

// It's the same cirle as the green one. We only create one circle, but we can change its properties
echo $blue_circle_1->draw(). PHP_EOL. PHP_EOL;

$yellow_triangle = ShapeFactory::getShape(Triangle::$name);
$yellow_triangle->setColor('Yellow')->setCoordinates('{4,5} {0,0} {3,2}');
echo $yellow_triangle->draw();

