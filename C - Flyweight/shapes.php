<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Flyweight;
require_once 'Shape.php';


class Circle extends Shape {
    public static $name = 'Circle';
    public function __construct() {
        $this->display_name = self::$name;
        $this->expensive_to_recreate_thing = 'Circles Creator Algorithm';
    }
}

class Triangle extends Shape {
    public static $name = 'Triangle';
    public function __construct() { 
        $this->display_name = self::$name;
        $this->expensive_to_recreate_thing = 'Triangle Creator Algorithm';
    }
}

class Quadrilateral extends Shape {
    public static $name = 'Quadrilateral';
    public function __construct() {
        $this->display_name = self::$name;
        $this->expensive_to_recreate_thing = 'Quadrilateral Fabricator Algorithm';
    }
}
