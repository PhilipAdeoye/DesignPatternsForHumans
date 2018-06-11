<?php 

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

/*
 * Builder
 * 
 * Allows you to create different flavors of an object while avoiding constructor pollution. 
 * Useful when there could be several flavors of an object. Or when there are a lot of steps 
 * involved in creation of an object.
 */

require_once 'PizzaBuilder.php';

$pizza = (new Builder\PizzaBuilder(10))
    ->add_bacon()
    ->add_pepperoni()
    ->add_pineapple()
    ->add_sausage()
    ->build();
    