<?php 

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

namespace DonutExample;

require_once 'DonutDecorator.php';

// Decorate donut with sprinkles
class SprinkledDonutDecorator extends DonutDecorator {
    
    public function __construct(Donut $donut) {
        parent::__construct($donut);
    }
    
    public function getDescription(): string {
        return parent::getDescription() . ' + sprinkles';
    }
    
    public function getPrice(): float {
        return parent::getPrice() + 0.2;
    }
}

// Decorate donut with sugar glaze
class GlazedDonutDecorator extends DonutDecorator {
    
    public function __construct(Donut $donut) {
        parent::__construct($donut);
    }
    
    public function getDescription(): string {
        return parent::getDescription() . ' + sugar glaze';
    }
    
    public function getPrice(): float {
        return parent::getPrice() + 0.1;
    }
}

// Decorate with chocolate frosting
class ChocolateFrostingDecorator extends DonutDecorator {
    
    public function __construct(Donut $donut) {
        parent::__construct($donut);
    }
    
    public function getDescription(): string {
        return parent::getDescription() . ' + chocolate frosting';
    }
    
    public function getPrice(): float {
        return parent::getPrice() + 0.3;
    }
}

// Decorate with organic nuts
class OrganicNutsDecorator extends DonutDecorator {
    public function __construct(Donut $donut) {
        parent::__construct($donut);
    }
    
    public function getDescription(): string {
        return parent::getDescription(). ' + certified premium organic nuts';
    }
    
    public function getPrice(): float {
        return parent::getPrice() + 1.5; // Nuts ain't cheap bro
    }
}
