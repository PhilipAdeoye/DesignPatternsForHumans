<?php



namespace HaloReach;

require_once 'Gun.php';
require_once 'Grenade.php';
require_once 'Ability.php';

/**
 * Description of Loadout
 *
 * @author Philip Adeoye
 */
class Loadout {
    
    protected $name;
    protected $primary_weapon;
    protected $secondary_weapon;
    protected $grenade;
    protected $ability;
    
    public function set_name(string $name) {
        $this->name = $name;
    }
    public function get_name(): string {
        return $this->name;
    }
    
    public function set_primary_weapon(Gun $gun) {
        $this->primary_weapon = $gun;
    }
    public function get_primary_weapon(): Gun {
        return $this->primary_weapon;
    }
    
    public function set_secondary_weapon(Gun $gun) {
        $this->secondary_weapon = $gun;
    }
    public function get_secondary_weapon(): Gun {
        return $this->secondary_weapon;
    }
    
    public function set_grenade(Grenade $grenade) {
        $this->grenade = $grenade;
    }
    public function get_grenade(): Grenade {
        return $this->grenade;
    }
    
    public function set_ability(Ability $ability) {
        $this->ability = $ability;
    }
    public function get_ability(): Ability {
        return $this->ability;
    }
}
