<?php

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

namespace Bridge;
require_once 'Theme.php';

class ChristmasTheme implements Theme { 
    
    public function get_accent_color(): string {
        return 'Green';
    }

    public function get_main_color(): string {
        return 'Red';
    }
}

class LightBlueTheme implements Theme {
    
    public function get_accent_color(): string {
        return 'Blue';
    }

    public function get_main_color(): string {
        return 'Off-white';
    }
}

class DarkBlueTheme implements Theme {
    
    public function get_accent_color(): string {
        return 'White';
    }

    public function get_main_color(): string {
        return 'Indigo';
    }
}