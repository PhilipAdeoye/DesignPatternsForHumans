<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FactoryMethod;

require_once 'Interviewer.php';

/**
 * Description of HiringManager
 *
 * @author Philip Adeoye
 */

abstract class HiringManager {
    
    abstract protected function make_interviewer(): Interviewer;
    
    public function take_interview() {
        $interviewer = $this->make_interviewer();
        $interviewer->ask_questions();
    }
    
}
