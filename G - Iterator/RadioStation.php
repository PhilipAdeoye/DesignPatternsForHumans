<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Radio;

/**
 * Description of RadioStation
 *
 * @author Philip Adeoye
 */
class RadioStation {
    
    protected $frequency;
    
    public function __construct(float $frequency) {
        $this->frequency = $frequency;
    }
    
    public function getFrequency(): float {
        return $this->frequency;
    }
   
}
