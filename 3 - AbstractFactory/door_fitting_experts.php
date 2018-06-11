<?php 

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

namespace AbstractFactory;


// DoorFittingExpert interface
interface DoorFittingExpert {
    public function get_description(): string;
}

/*
 * Classes that implement the DoorFittingExpert interface
 */
class Welder implements DoorFittingExpert {
    public function get_description(): string {
        return 'Welder here, I fit metal doors';
    }
}

class Carpenter implements DoorFittingExpert {
    public function get_description(): string {
        return 'Carpenter here, I fit wooden doors';
    }
}

