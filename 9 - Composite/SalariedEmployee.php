<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Composite;

require_once 'PayableEntity.php';

/**
 * Description of SalariedEmployee
 *
 * @author Philip Adeoye
 */
class SalariedEmployee implements PayableEntity {
    
    protected $salary = 1280;
    
    public function get_monthly_pay(): float {
        return $this->salary;
    }

}
