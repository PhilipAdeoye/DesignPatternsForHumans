<?php

namespace SimpleFactory;

require_once 'Door.php';
/**
 * Description of WoodenDoor
 *
 * @author Philip Adeoye
 */
class WoodenDoor implements Door {
    
    protected $width;
    protected $height;
    
    public function __construct(float $width, float $height) {
        $this->width = $width;
        $this->height = $height;
    }
    
    public function get_width(): float {
        return $this->width;
    }
    
    public function get_height(): float {
        return $this->height;
    }       
}
