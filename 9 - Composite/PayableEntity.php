<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Composite;

/**
 *
 * @author Philip-Mac
 */
interface PayableEntity {    
    public function get_monthly_pay(): float;
}
