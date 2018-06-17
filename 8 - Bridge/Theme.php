<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Bridge;

/**
 *
 * @author Philip-Mac
 */
interface Theme {
    public function get_main_color(): string;
    public function get_accent_color(): string;
}
