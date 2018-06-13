<?php 

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/
namespace Builder;
require_once 'HouseBuilder.php';

// Igloo
class IglooBuilder implements HouseBuilder {
    private $house;
    
    // constructor
    public function __construct() {
        $this->house = new House();
    }
    
    // Get House
    public function get_house(): House {
        return $this->house;
    }
    
    // implement functions
    public function build_basement(): HouseBuilder {
        $this->house->set_basement('Ice bars');
        return $this;
    }    
    public function build_interior(): HouseBuilder {
        $this->house->set_interior('Ice Carvings');
        return $this;
    }
    public function build_structure(): HouseBuilder {
        $this->house->set_structure('Ice Blocks');
        return $this;
    }
    public function build_roof(): HouseBuilder {
        $this->house->set_roof('Ice Dome');
        return $this;
    }
}

// Tipi
class TipiBuilder implements HouseBuilder {
    private $house;
    
    // constructor
    public function __construct() {
        $this->house = new House();
    }
    
    // Get House
    public function get_house(): House {
        return $this->house;
    }
    
    // implement functions
    public function build_basement(): HouseBuilder {
        $this->house->set_basement('Wooden Poles');
        return $this;
    }    
    public function build_interior(): HouseBuilder {
        $this->house->set_interior('Fire Wood');
        return $this;
    }
    public function build_structure(): HouseBuilder {
        $this->house->set_structure('Wood and Ice');
        return $this;
    }
    public function build_roof(): HouseBuilder {
        $this->house->set_roof('Wood, caribou, and seal skins');
        return $this;
    }
}