<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Builder;

require_once 'concrete_house_builders.php';

/**
 * Description of CivilEngineer
 *
 * @author Philip Adeoye
 */
class CivilEngineer {
    
    private $house_builder;
    
    public function __construct(HouseBuilder $house_builder) {
        $this->house_builder = $house_builder;
    }
    
    public function get_house():House {
        return $this->house_builder->get_house();
    }
    
    public function construct_house() {
        $this->house_builder
            ->build_basement()
            ->build_interior()
            ->build_roof()
            ->build_structure();
    }
}
