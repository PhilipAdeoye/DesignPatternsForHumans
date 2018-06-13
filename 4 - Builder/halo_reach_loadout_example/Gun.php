<?php



namespace HaloReach;

/**
 * Description of Gun
 *
 * @author Philip Adeoye
 */
abstract class Gun {
    
    protected $name;
    protected $damage;
    protected $range; 
    protected $rounds_per_minute;
    
    public function __construct(string $name, string $damage, string $range, string $rounds_per_minute) {
        $this->name = $name;
        $this->damage = $damage;
        $this->range = $range;
        $this->rounds_per_minute = $rounds_per_minute;
    }
    
    public function get_name(): string {
        return $this->name;        
    }
    
    public function get_damage(): string {
        return $this->damage;
    }
    
    public function get_range(): string {
        return $this->range;
    }
    
    public function get_rounds_per_minute(): string {
        return $this->rounds_per_minute;
    }    
}

interface GunFactory {
    public static function make_gun(): Gun;
}