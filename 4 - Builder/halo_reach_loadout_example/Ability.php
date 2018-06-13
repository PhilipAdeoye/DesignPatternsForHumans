<?php

namespace HaloReach;

/**
 *
 * @author Philip-Mac
 */
abstract class Ability {
    
    protected $name;
    protected $description;
    
    public function __construct(string $name, string $description) {
        $this->name = $name;
        $this->description = $description;
    }
    
    public function get_name(): string {
        return $this->name;
    }
    public function get_description(): string {
        return $this->description;
    }
    
}

interface AbilityFactory {
    public static function make_ability(): Ability;
}
