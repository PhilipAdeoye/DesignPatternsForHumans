<?php


/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Composite;
require_once 'Team.php';
require_once 'HourlyEmployee.php';

/**
 * Description of Division
 *
 * @author Philip Adeoye
 */
class BusinessUnit implements PayableEntity {
    
    protected $teams = [];
    protected $contractors = [];

    public function get_monthly_pay(): float {
        $total = 0;
        foreach ($this->teams as $team) {
            $total += $team->get_monthly_pay();
        }
        foreach ($this->contractors as $contractor) {
            $total += $contractor->get_monthly_pay();
        }
        return $total;
    }
    
    public function add_team(Team $team): BusinessUnit {
        $this->teams[] = $team;
        return $this;
    }
    public function add_contractor(HourlyEmployee $contractor): BusinessUnit {
        $this->contractors[] = $contractor;
        return $this;
    }

}
