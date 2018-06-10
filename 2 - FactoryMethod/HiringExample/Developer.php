<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FactoryMethod;

require_once 'Interviewer.php';

/**
 * Description of Developer
 *
 * @author Philip Adeoye
 */
class Developer implements Interviewer {
    
    public function ask_questions() {
        echo 'Developer: Asking about coding conventions';
    }
}
