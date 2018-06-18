<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace DonutExample;

/**
 *
 * @author Philip-Mac
 */
interface Donut {
    
    public function getPrice(): float;
    public function getDescription(): string;
}
