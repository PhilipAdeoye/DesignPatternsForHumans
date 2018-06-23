<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Proxy;

/**
 * Description of Driver
 *
 * @author Philip Adeoye
 */
class Driver {
    
    protected $age;
    
    public function __construct(int $age) {
        $this->age = $age;
    }
    
    public function getAge(): int {
        return $this->age;
    }
}
