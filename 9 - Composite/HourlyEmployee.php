<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Composite;

require_once 'PayableEntity.php';

/**
 * Description of HourlyEmployee
 *
 * @author Philip Adeoye
 */
class HourlyEmployee implements PayableEntity {
    
    protected $hours_in_month = 160;
    protected $hourly_rate = 8.0;
    
    public function get_monthly_pay(): float {
        return $this->hourly_rate * $this->hours_in_month;
    }

}
