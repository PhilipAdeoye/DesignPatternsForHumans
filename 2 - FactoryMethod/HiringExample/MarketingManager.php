<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace FactoryMethod;

require_once 'HiringManager.php';
require_once 'CommunityExecutive.php';
/**
 * Description of MarketingManager
 *
 * @author Philip Adeoye
 */
class MarketingManager extends HiringManager {
    
    protected function make_interviewer(): Interviewer {
        return new CommunityExecutive();
    }
}
