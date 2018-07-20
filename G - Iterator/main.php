<?php 

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

namespace Radio;

require_once 'StationList.php';

$stationList = new StationList();

$stationList->addStation(new RadioStation(89));
$stationList->addStation(new RadioStation(101));
$stationList->addStation(new RadioStation(102));
$stationList->addStation(new RadioStation(103.2));

echo 'Stations: '. PHP_EOL;
foreach($stationList as $station) {
    echo $station->getFrequency() . PHP_EOL;
}

$stationList->removeStation(new RadioStation(89)); // Will remove station 89

$stationList->rewind();

echo 'Stations: '. PHP_EOL;
foreach($stationList as $sta) {
    echo $sta->getFrequency() . PHP_EOL;
}
echo $stationList->count();


