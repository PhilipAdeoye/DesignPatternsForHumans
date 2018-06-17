<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PhoneCharger;
require_once 'IPhoneToUniversalLayoutAdapter.php';

class IPhoneRechargerAlgo {

    private $phone;

    public function __construct() {
        echo '--- Recharging iPhone with iPhone charger ---' . PHP_EOL;

        $this->phone = new IPhone();
        echo $this->phone->use_lightning() . PHP_EOL;
        echo $this->phone->recharge() . PHP_EOL;
        echo '--- IPhone ready for use ---' . PHP_EOL . PHP_EOL;
    }

}

class MotoZPlayRechargerAlgo {

    private $phone;

    public function __construct() {
        echo '--- Recharging Moto Z Play with universal charger ---' . PHP_EOL;

        $this->phone = new MotoZPlay();
        echo $this->phone->use_micro_usb() . PHP_EOL;
        echo $this->phone->recharge() . PHP_EOL;
        echo '--- Moto Z Play ready for use ---' . PHP_EOL . PHP_EOL;
    }

}

class IPhoneWithAdapterRechargerAlgo {

    private $phone;
    private $adapter;

    public function __construct() {
        echo '--- Recharging iPhone with adapter ---' . PHP_EOL;

        $this->phone = new IPhone();
        $this->adapter = new IPhoneToUniversalLayoutAdapter($this->phone);
        echo $this->adapter->use_micro_usb() . PHP_EOL;
        echo $this->adapter->recharge() . PHP_EOL;
        echo '--- iPhone ready for use --- '. PHP_EOL . PHP_EOL;
    }

}
