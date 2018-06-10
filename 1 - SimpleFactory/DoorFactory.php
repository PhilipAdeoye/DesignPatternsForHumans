<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace SimpleFactory;

require_once 'WoodenDoor.php';

/**
 * Description of DoorFactory
 *
 * @author Philip Adeoye
 */
class DoorFactory {
    
    public static function make_door($width, $height): Door {
        return new WoodenDoor($width, $height);
    }
}
