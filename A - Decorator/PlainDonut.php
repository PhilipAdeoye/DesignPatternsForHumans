<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DonutExample;

require_once 'Donut.php';
/**
 * Description of PlainDonut
 *
 * @author Philip Adeoye
 */
class PlainDonut implements Donut {
    
    public function getDescription(): string {
        return 'Plain Donut';
    }

    public function getPrice(): float {
        return 0.45;
    }

}
