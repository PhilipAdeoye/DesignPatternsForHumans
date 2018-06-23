<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Flyweight;

require_once 'IDrawable.php';

/**
 * Description of Shape
 *
 * @author Philip Adeoye
 */
abstract class Shape implements IDrawable{
    
    public static $name = 'Shape';
    
    // Intrinsic properties
    protected $display_name;
    protected $expensive_to_recreate_thing;
    
    // Extrinsic properties
    protected $coordinates;
    protected $color; 
    
    
    public function draw(): string {
        return 'Drawing a '.$this->color.' '. 
            $this->display_name . ' at coordinates: ' . 
            $this->coordinates . ' using ' .
            $this->expensive_to_recreate_thing;
    } 
    
    public function getCoordinates(): string {
        return $this->coordinates;
    }
    public function setCoordinates(string $coords): Shape {
        $this->coordinates = $coords;
        return $this;
    }
    
    public function getColor(): string {
        return $this->color;
    }
    public function setColor(string $color): Shape {
        $this->color = $color;
        return $this;
    }
    
}
