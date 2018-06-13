<?php 


namespace HaloReach;

require_once 'Ability.php';
require_once 'Severity.php';

class JetPack extends Ability {
    
}
class JetPackFactory implements AbilityFactory {
    public static function make_ability(): Ability {
        return new JetPack('Jet Pack', 'Lets you fly!');
    }
}

class Sprint extends Ability {
    
}
class SprintFactory implements AbilityFactory {
    public static function make_ability(): Ability {
        return new Sprint('Sprint', 'Lets you sprint');
    }
}

class ArmorLock extends Ability {
    
}
class ArmorLockFactory implements AbilityFactory {
    public static function make_ability(): Ability {
        return new ArmorLock('Armor Lock', 'Makes you temporarily invulnerable');
    }
}