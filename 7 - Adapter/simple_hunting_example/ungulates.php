<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace HuntingExample;

require_once 'Ungulate.php';

/**
 * Description of Antelope
 *
 * @author Philip Adeoye
 */
class Antelope implements Ungulate {
    
    public function graze(): string {
        return 'graze like bosses';
    }

    public function sprint(): string {
        return 'sprint like bosses';
    }

}

class Zebra implements Ungulate {
    
    public function graze(): string {
        return 'graze from behind';
    }

    public function sprint(): string {
        return 'well, they also... nevermind';
    }

}
