<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Proxy;
require_once 'IDriveable.php';

/**
 * Description of Car
 *
 * @author Philip Adeoye
 */
class Car implements IDriveable {
    
    public function drive(): string {
        return 'Motoring along the motorway';
    }

}
