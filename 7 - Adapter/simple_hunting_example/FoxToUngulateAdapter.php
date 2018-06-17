<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace HuntingExample;
require_once 'ungulates.php';
require_once 'Fox.php';

/**
 * Description of FoxToUngulateAdapter
 *
 * @author Philip Adeoye
 */
class FoxToUngulateAdapter implements Ungulate {
    
    protected $fox;
    
    public function __construct(Fox $fox) {
        $this->fox = $fox;
    }

    public function graze(): string {
        return $this->fox->chomp();
    }

    public function sprint(): string {
        return $this->fox->stalk();
    }

}
