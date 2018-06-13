<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Builder;

require_once 'House.php';
/**
 *
 * @author Philip-Mac
 */
interface HouseBuilder {
    
    public function build_basement(): HouseBuilder;
    public function build_structure(): HouseBuilder;
    public function build_roof(): HouseBuilder;
    public function build_interior(): HouseBuilder;
    
    public function get_house(): House;
}
