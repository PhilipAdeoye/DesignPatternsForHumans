<?php 

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

namespace Proxy;

require_once 'ProxyCar.php';

echo (new ProxyCar(new Driver(87)))->drive() . PHP_EOL;
echo (new ProxyCar(new Driver(17)))->drive() . PHP_EOL;
echo (new ProxyCar(new Driver(7)))->drive() . PHP_EOL;