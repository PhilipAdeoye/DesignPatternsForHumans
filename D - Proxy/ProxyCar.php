<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Proxy;

require_once 'Car.php';
require_once 'Driver.php';

/**
 * Description of ProxyCar
 *
 * @author Philip Adeoye
 */
class ProxyCar implements IDriveable {
    
    const DRIVING_AGE = 16;
    
    private $driver;
    private $car;
    
    public function __construct(Driver $driver) {
        $this->driver = $driver;
        $this->car = new Car();
    }
    
    public function drive(): string {
        if ($this->driver->getAge() < self::DRIVING_AGE) {
            return 'This driver may not drive until they are up to '. self::DRIVING_AGE;
        }
        else {
            return $this->car->drive();
        }
    }

}
