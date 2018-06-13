<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Builder;

require_once 'PizzaBuilder.php';
/**
 * Description of Burger
 *
 * @author Philip Adeoye
 */
class Pizza {
    
    protected $size;
    
    protected $has_dough = TRUE;
    protected $has_cheese = TRUE;
    
    protected $has_pepperoni = FALSE;
    protected $has_sausage = FALSE;
    protected $has_bacon = FALSE;
    protected $has_pineapple = FALSE;
    
    public function __construct(PizzaBuilder $builder) {
        $this->size = $builder->size;
        
        $this->has_pepperoni = $builder->has_pepperoni;
        $this->has_bacon = $builder->has_bacon;
        $this->has_pineapple = $builder->has_pineapple;
        $this->has_sausage = $builder->has_sausage;
    }
    
}
