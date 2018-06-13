<?php



namespace HaloReach;

require_once 'Loadout.php';

/**
 * Description of LoadoutBuilder
 *
 * @author Philip Adeoye
 */
interface LoadoutBuilder {
    
    public function get_loadout(): Loadout;
    
    public function set_name(): LoadoutBuilder;
    public function add_primary_weapon(): LoadoutBuilder;
    public function add_secondary_weapon(): LoadoutBuilder;
    public function add_grenade(): LoadoutBuilder;
    public function add_ability(): LoadoutBuilder;
}
