<?php 


namespace HaloReach;

require_once 'Grenade.php';
require_once 'Severity.php';

class FragGrenade extends Grenade {
    
}
class FragGrenadeFactory implements GrenadeFactory {
    public static function make_grenade(): Grenade {
        return new FragGrenade('Frag Grenade', Severity::VERY_HIGH);
    }
}

class StickyGrenade extends Grenade {
    
}
class StickyGrenadeFactory implements GrenadeFactory {
    public static function make_grenade(): Grenade {
        return new FragGrenade('Sticky Grenade', Severity::VERY_HIGH);
    }
}