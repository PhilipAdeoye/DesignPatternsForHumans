<?php



namespace HaloReach;

/**
 *
 * @author Philip-Mac
 */
abstract class Grenade {
    
    protected $name;
    protected $damage;
    
    public function __construct(string $name, string $damage) {
        $this->name = $name;
        $this->damage = $damage;
    }
    
    public function get_name(): string {
        return $this->name;        
    }
    
    public function get_damage(): string {
        return $this->damage;
    }
}

interface GrenadeFactory {
    public static function make_grenade(): Grenade;
}
