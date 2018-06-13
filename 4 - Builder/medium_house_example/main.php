<?php 

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

require_once 'CivilEngineer.php';

$iglooBuilder = new Builder\IglooBuilder();
$engineer = new \Builder\CivilEngineer($iglooBuilder);

$engineer->construct_house();

$igloo = $engineer->get_house();
echo $igloo->get_basement() . PHP_EOL;
echo $igloo->get_interior() . PHP_EOL;
echo $igloo->get_structure() . PHP_EOL;
echo $igloo->get_roof() . PHP_EOL;


$tipiBuilder = new Builder\TipiBuilder();
$engineer = new \Builder\CivilEngineer($tipiBuilder);

$engineer->construct_house();

$tipi = $engineer->get_house();
echo $tipi->get_basement() . PHP_EOL;
echo $tipi->get_interior() . PHP_EOL;
echo $tipi->get_structure() . PHP_EOL;
echo $tipi->get_roof() . PHP_EOL;