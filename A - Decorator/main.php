<?php 

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

namespace DonutExample;

require_once 'PlainDonut.php';
require_once 'decorators.php';

// Start with a plain donut
$plain_donut = new PlainDonut();
echo $plain_donut->getDescription() . '. Price: '. $plain_donut->getPrice(). PHP_EOL. PHP_EOL;


// Let's decorate this thing!
$with_sprinkles = new SprinkledDonutDecorator($plain_donut);
echo $with_sprinkles->getDescription() . '. Price: '. $with_sprinkles->getPrice(). PHP_EOL. PHP_EOL;

$with_sugar_glaze = new GlazedDonutDecorator($with_sprinkles);
echo $with_sugar_glaze->getDescription() . '. Price: '. $with_sugar_glaze->getPrice(). PHP_EOL. PHP_EOL;

$with_organic_nuts = new OrganicNutsDecorator($with_sugar_glaze);
echo $with_organic_nuts->getDescription() . '. Price: '. $with_organic_nuts->getPrice(). PHP_EOL. PHP_EOL;


