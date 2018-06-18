<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DonutExample;

require_once 'Donut.php';
/**
 * Description of DonutDecorator
 *
 * @author Philip Adeoye
 */
abstract class DonutDecorator implements Donut {
    protected $donut;
    
    public function __construct(Donut $donut) {
        $this->donut = $donut;
    }
    
    public function getDescription(): string {
        return $this->donut->getDescription();
    }
    
    public function getPrice(): float {
        return $this->donut->getPrice();
    }
}
