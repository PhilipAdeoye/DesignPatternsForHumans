<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Composite;

require_once 'PayableEntity.php';

/**
 * Description of Team
 *
 * @author Philip Adeoye
 */
class Team implements PayableEntity {
        
    protected $employees = [];
        
    public function get_monthly_pay(): float {
        $total = 0;
        foreach ($this->employees as $employee) {
            $total += $employee->get_monthly_pay();
        }
        return $total;
    }
    
    public function add_employee(PayableEntity $employee): Team {
        $this->employees[] = $employee;
        return $this;
    }

}
