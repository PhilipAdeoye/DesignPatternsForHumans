<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Command;

require_once 'Command.php';
require_once 'LightBulb.php';

/**
 * Description of TurnOn
 *
 * @author Philip Adeoye
 */
class TurnOn implements Command {
    
    protected $bulb;
    
    public function __construct(LightBulb $bulb) {
        $this->bulb = $bulb;
    }
    
    public function execute(): string {
        return $this->bulb->turnOn();
    }

    public function undo(): string {
        return $this->bulb->turnOff();
    }

    public function redo(): string {
        return $this->execute();
    }

}
