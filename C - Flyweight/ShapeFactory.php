<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Flyweight;

require_once 'shapes.php';

/**
 * Description of ShapeFactory
 *
 * @author Philip Adeoye
 */
class ShapeFactory {
    
    private static $shapes = array();
    
    public static function getShape(string $name): Shape {                 
        
        if (empty(self::$shapes[$name])) {
            
            echo 'Creating a new '.$name. PHP_EOL;
            
            switch ($name) {
                case Circle::$name:
                    self::$shapes[$name] = new Circle();                    
                    break;
                case Triangle::$name:
                    self::$shapes[$name] = new Triangle();
                    break;
                case Quadrilateral::$name:
                    self::$shapes[$name] = new Quadrilateral();
                    break;    
                default :
                    self::$shapes[$name] = new Circle();
                    break;
            }
        }
        else {
            echo 'Reusing an existing '. $name. PHP_EOL;
        }
        
        return self::$shapes[$name];      
        
    }
}
