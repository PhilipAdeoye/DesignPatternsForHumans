<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Builder;

/**
 *
 * @author Philip-Mac
 */
interface HousePlan {
    
    public function set_basement(string $basement);
    public function set_structure(string $structure);    
    public function set_roof(string $roof);    
    public function set_interior(string $interior);
    
    public function get_basement(): string;
    public function get_structure(): string;    
    public function get_roof(): string;    
    public function get_interior(): string;
    
    
}
