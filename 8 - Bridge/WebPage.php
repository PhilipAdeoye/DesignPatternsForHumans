<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Bridge;

require_once 'Theme.php';

/**
 *
 * @author Philip-Mac
 */
interface WebPage {
    public function __construct(Theme $theme);
    
    public function get_header(): string;
    public function get_body(): string;
    public function get_footer(): string;
    
    public function get_complete_page(): string;
}
