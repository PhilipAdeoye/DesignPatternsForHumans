<?php 


namespace HaloReach;

require_once 'Gun.php';
require_once 'Severity.php';


class AssaultRifle extends Gun {   
    
}
class AssaultRifleFactory implements GunFactory {    
    public static function make_gun(): Gun {
        return new AssaultRifle('Assault Rifle', Severity::MEDIUM, Severity::MEDIUM, Severity::VERY_HIGH);
    }
}


class DMR extends Gun {
    
}
class DMRFactory implements GunFactory {
    public static function make_gun(): Gun {
        return new DMR('DMR', Severity::HIGH, Severity::VERY_HIGH, Severity::LOW);
    }
}

class Shotgun extends Gun {
    
}
class ShotgunFactory implements GunFactory {    
    public static function make_gun(): Gun {
        return new Shotgun('Shotgun', Severity::HIGH, Severity::LOW, Severity::MEDIUM);
    }
}

class GrenadeLauncher extends Gun {
    
}
class GrenadeLauncherFactory implements GunFactory {
    public static function make_gun(): Gun {
        return new GrenadeLauncher('Grenade Launcher', Severity::VERY_HIGH, Severity::HIGH, Severity::MEDIUM);
    }
}

class Pistol extends Gun {
    
}
class PistolFactory implements GunFactory {
    public static function make_gun(): Gun {
        return new Pistol('Pistol', Severity::HIGH, Severity::HIGH, Severity::LOW);
    }
}
