<?php 


namespace HaloReach;

require_once 'guns.php';
require_once 'grenades.php';
require_once 'abilities.php';
require_once 'LoadoutBuilder.php';

// Air Assault
class AirAssaultLoadoutBuilder implements LoadoutBuilder {
    
    private $loadout;
    
    public function __construct() {
        $this->loadout = new Loadout();
    }
    
    public function set_name(): LoadoutBuilder {
        $this->loadout->set_name('Air Assault');
        return $this;
    }
    
    public function add_ability(): LoadoutBuilder {
        $this->loadout->set_ability(JetPackFactory::make_ability());
        return $this;
    }

    public function add_grenade(): LoadoutBuilder {
        $this->loadout->set_grenade(FragGrenadeFactory::make_grenade());
        return $this;
    }

    public function add_primary_weapon(): LoadoutBuilder {
        $this->loadout->set_primary_weapon(AssaultRifleFactory::make_gun());
        return $this;
    }

    public function add_secondary_weapon(): LoadoutBuilder {
        $this->loadout->set_secondary_weapon(PistolFactory::make_gun());
        return $this;
    }

    public function get_loadout(): Loadout {
        return $this->loadout;
    }
}

// Expert Marksman
class ExpertMarksmanLoadoutBuilder implements LoadoutBuilder {
    
    private $loadout;
    
    public function __construct() {
        $this->loadout = new Loadout();
    }
    
    public function set_name(): LoadoutBuilder {
        $this->loadout->set_name('Expert Marksman');
        return $this;
    }
    
    public function add_ability(): LoadoutBuilder {
        $this->loadout->set_ability(SprintFactory::make_ability());
        return $this;
    }

    public function add_grenade(): LoadoutBuilder {
        $this->loadout->set_grenade(FragGrenadeFactory::make_grenade());
        return $this;
    }

    public function add_primary_weapon(): LoadoutBuilder {
        $this->loadout->set_primary_weapon(DMRFactory::make_gun());
        return $this;
    }

    public function add_secondary_weapon(): LoadoutBuilder {
        $this->loadout->set_secondary_weapon(PistolFactory::make_gun());
        return $this;
    }

    public function get_loadout(): Loadout {
        return $this->loadout;
    }
}

// Operator
class OperatorLoadoutBuilder implements LoadoutBuilder {
    
    private $loadout;
    
    public function __construct() {
        $this->loadout = new Loadout();
    }
    
    public function set_name(): LoadoutBuilder {
        $this->loadout->set_name('Operator');
        return $this;
    }
    
    public function add_ability(): LoadoutBuilder {
        $this->loadout->set_ability(ArmorLockFactory::make_ability());
        return $this;
    }

    public function add_grenade(): LoadoutBuilder {
        $this->loadout->set_grenade(FragGrenadeFactory::make_grenade());
        return $this;
    }

    public function add_primary_weapon(): LoadoutBuilder {
        $this->loadout->set_primary_weapon(ShotgunFactory::make_gun());
        return $this;
    }

    public function add_secondary_weapon(): LoadoutBuilder {
        $this->loadout->set_secondary_weapon(PistolFactory::make_gun());
        return $this;
    }

    public function get_loadout(): Loadout {
        return $this->loadout;
    }
}

// Grenadier
class GrenadierLoadoutBuilder implements LoadoutBuilder {
    
    private $loadout;
    
    public function __construct() {
        $this->loadout = new Loadout();
    }
    
    public function set_name(): LoadoutBuilder {
        $this->loadout->set_name('Grenadier');
        return $this;
    }
    
    public function add_ability(): LoadoutBuilder {
        $this->loadout->set_ability(SprintFactory::make_ability());
        return $this;
    }

    public function add_grenade(): LoadoutBuilder {
        $this->loadout->set_grenade(FragGrenadeFactory::make_grenade());
        return $this;
    }

    public function add_primary_weapon(): LoadoutBuilder {
        $this->loadout->set_primary_weapon(GrenadeLauncherFactory::make_gun());
        return $this;
    }

    public function add_secondary_weapon(): LoadoutBuilder {
        $this->loadout->set_secondary_weapon(AssaultRifleFactory::make_gun());
        return $this;
    }

    public function get_loadout(): Loadout {
        return $this->loadout;
    }
}