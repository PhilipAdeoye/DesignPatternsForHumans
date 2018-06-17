<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PhoneCharger;

require_once 'phones.php';

/**
 * Description of IPhoneAdapter
 *
 * @author Philip Adeoye
 */
class IPhoneToUniversalLayoutAdapter implements UniversalLayout {    
    
    private $iPhone;
    
    public function __construct(IPhone $iPhone) {
        $this->iPhone = $iPhone;
    }
    
    public function recharge(): string {
        return $this->iPhone->recharge();
    }

    public function use_micro_usb(): string {
        return $this->iPhone->use_lightning();
    }

}
