<?php 

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

namespace Command;

require_once 'RemoteControl.php';
require_once 'TurnOn.php';
require_once 'TurnOff.php';

$bulb = new LightBulb;

$turnOn = new TurnOn($bulb);
$turnOff = new TurnOff($bulb);

$rc = new RemoteControl();
echo $rc->submit($turnOn) . PHP_EOL;
echo $rc->submit($turnOff) . PHP_EOL;

