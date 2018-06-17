<?php 

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

namespace PhoneCharger;

require_once 'layouts.php';

class IPhone implements AppleLayout {
    
    private $connector_ok = FALSE;    
    
    public function recharge(): string {
        if ($this->connector_ok) {
            return 'Recharge started' .PHP_EOL.
                'Recharge 20%'.PHP_EOL.
                'Recharge 50%'.PHP_EOL.
                'Recharge 70%'.PHP_EOL.
                'Recharge 100%'.PHP_EOL.
                'Recharge Finished!';
        }
        else {
            return 'Connect Lightning first';
        }
    }

    public function use_lightning(): string {
        $this->connector_ok = TRUE;
        return 'Lightning connected';
    }
}

class MotoZPlay implements UniversalLayout {
    private $connector_ok = FALSE;    
    
    public function recharge(): string {
        if ($this->connector_ok) {
            return 'Recharge started' .PHP_EOL.
                'Recharge 20%'.PHP_EOL.
                'Recharge 50%'.PHP_EOL.
                'Recharge 70%'.PHP_EOL.
                'Recharge 100%'.PHP_EOL.
                'Recharge Finished!';
        }
        else {
            return 'Connect Micro USB first';
        }
    }

    public function use_micro_usb(): string {
        $this->connector_ok = TRUE;
        return 'Micro USB connected';
    }
}

