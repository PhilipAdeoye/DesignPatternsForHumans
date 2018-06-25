<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Command;

/**
 * Description of LightBulb
 *
 * @author Philip Adeoye
 */
class LightBulb {
    
    public function turnOn(): string {
        return 'Bulb is now lit';
    }
    
    public function turnOff(): string {
        return 'Bulb is now off';
    }
}
