<?php



namespace HaloReach;

require_once 'loadout_builders.php';
/**
 * Description of Lobby
 *
 * @author Philip Adeoye
 */
class Director {      
    
    public static function build_loadout(LoadoutBuilder $loadout_builder): Loadout {
        $loadout_builder
            ->set_name()
            ->add_ability()
            ->add_grenade()
            ->add_primary_weapon()
            ->add_secondary_weapon();   
        
        return $loadout_builder->get_loadout();
    }
}
