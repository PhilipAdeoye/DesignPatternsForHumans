<?php 

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

namespace AbstractFactory;

require_once 'doors.php';
require_once 'door_fitting_experts.php';


// Abstract Factory
interface DoorFactory {
    public function make_door(): Door;
    public function make_fitting_expert(): DoorFittingExpert;
}

/*
 * Classes that implement DoorFactory
 */

class WoodenDoorFactory implements DoorFactory {
    
    public function make_door(): Door {
        return new WoodenDoor();
    }
    
    public function make_fitting_expert(): DoorFittingExpert {
        return new Carpenter();
    }
}

class IronDoorFactory implements DoorFactory {

    public function make_door(): Door {
        return new IronDoor();
    }
    
    public function make_fitting_expert(): DoorFittingExpert {
        return new Welder();
    }
}

class SteelDoorFactory implements DoorFactory {

    public function make_door(): Door {
        return new SteelDoor();
    }
    
    public function make_fitting_expert(): DoorFittingExpert {
        return new Welder();
    }
}