<?php 

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

namespace CoR;

require_once 'ResearchCoR.php';

// Setup chain of responsibility
$chain = new ResearchCoR();

$request = new SimpleResearchRequest('Call a Participant');
echo $chain->handleResearchRequest($request) .PHP_EOL;

echo $chain->handleResearchRequest(new SpecialResearchRequest('An adverse event occured')).PHP_EOL;

echo $chain->handleResearchRequest(new HighLevelResearchRequest('Hire a new Research Manager')).PHP_EOL;

