<?php 


namespace HaloReach;

require_once 'Director.php';

$default_loadouts = [
    Director::build_loadout(new AirAssaultLoadoutBuilder()),
    Director::build_loadout(new ExpertMarksmanLoadoutBuilder()),
    Director::build_loadout(new OperatorLoadoutBuilder()),
    Director::build_loadout(new GrenadierLoadoutBuilder())
];

foreach ($default_loadouts as $loadout) {
    
    echo $loadout->get_name() . PHP_EOL;
    echo 'Primary Weapon: '. $loadout->get_primary_weapon()->get_name() . PHP_EOL;
    echo 'Secondary Weapon: '. $loadout->get_secondary_weapon()->get_name() . PHP_EOL;
    echo 'Grenade: '. $loadout->get_grenade()->get_name() . PHP_EOL;
    echo 'Ability: '. $loadout->get_ability()->get_name() . PHP_EOL;
    echo PHP_EOL;
}
