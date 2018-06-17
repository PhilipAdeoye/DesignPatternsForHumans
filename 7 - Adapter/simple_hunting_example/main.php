<?php 

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

namespace HuntingExample;

require_once 'FoxToUngulateAdapter.php';
require_once 'Hunter.php';

$antelope = new Antelope();
$zebra = new Zebra();

$hunter = new Hunter();

echo $hunter->hunt($antelope);
echo PHP_EOL;
echo $hunter->hunt($zebra);
echo PHP_EOL;
echo $hunter->hunt(new FoxToUngulateAdapter(new Fox));
echo PHP_EOL;
    