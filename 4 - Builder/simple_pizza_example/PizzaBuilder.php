<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Builder;

require_once 'Pizza.php';

/**
 * Description of PizzaBuilder
 *
 * @author Philip Adeoye
 */
class PizzaBuilder {
    
    public $size;
    
    public $has_pepperoni = FALSE;
    public $has_sausage = FALSE;
    public $has_bacon = FALSE;
    public $has_pineapple = FALSE;
    
    public function __construct(int $size) {
        $this->size = $size;        
    }
    
    // Actual object creation happens here
    public function build(): Pizza {
        return new Pizza($this);
    }
    
    public function add_pepperoni() {
        $this->has_pepperoni = TRUE;
        return $this;
    }
    
    public function add_sausage() {
        $this->has_sausage = TRUE;
        return $this;
    }
    
    public function add_bacon() {
        $this->has_bacon = TRUE;
        return $this;
    }
    
    public function add_pineapple() {
        $this->has_pineapple = TRUE;
        return $this;
    }
}
