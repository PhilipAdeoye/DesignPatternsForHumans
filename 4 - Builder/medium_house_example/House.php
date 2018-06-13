<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Builder;

require_once 'HousePlan.php';

/**
 * Description of House
 *
 * @author Philip Adeoye
 */
class House implements HousePlan {
    
    protected $basement;
    protected $structure;
    protected $roof;
    protected $interior;
    
    public function set_basement(string $basement) {
        $this->basement = $basement;
    }
    public function set_interior(string $interior) {
        $this->interior = $interior;
    }
    public function set_roof(string $roof) {
        $this->roof = $roof;
    }
    public function set_structure(string $structure) {
        $this->structure = $structure;
    }
    
    public function get_basement(): string {
        return $this->basement;
    }
    public function get_structure(): string {
        return $this->structure;
    }
    public function get_roof(): string {
        return $this->roof;
    }
    public function get_interior(): string {
        return $this->interior;
    }

}
