<?php 

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

namespace AbstractFactory;



// Door interface
interface Door {
    public function get_description(): string;
}

/*
 * Classes that implement the Door interface
 */
class WoodenDoor implements Door {
    public function get_description(): string {
        return 'Wooden door here, I am made of wood';
    }
}

class IronDoor implements Door {
    public function get_description(): string {
        return 'Iron door. I am magnetic';
    }
}

class SteelDoor implements Door {
    public function get_description(): string {
        return 'Steel door, I am better than iron';
    }
}

