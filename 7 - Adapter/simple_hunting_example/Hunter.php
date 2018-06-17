<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace HuntingExample;

require_once 'ungulates.php';

/**
 * Description of Hunter
 *
 * @author Philip Adeoye
 */
class Hunter {
    
    public function hunt(Ungulate $target): string {
        return 'Hunting is good to cull the population. 
            The hunted may think that they ' . $target->graze() . ' and that they '. $target->sprint() 
            .', but I am here to put an end to all of that.';
    }
}
