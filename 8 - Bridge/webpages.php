<?php 

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

namespace Bridge;
require_once 'themes.php';
require_once 'WebPage.php';

abstract class Page implements WebPage {
    protected $theme;
    protected $name;
    protected $background_color = 'White';
    
    public function get_body(): string {
        return $this->name . ' in ' .$this->background_color;
    }

    public function get_footer(): string {
        return $this->name . ' footer in '. $this->theme->get_accent_color();
    }

    public function get_header(): string {
        return $this->name . ' header in '. $this->theme->get_main_color();
    }
    
    public function get_complete_page(): string {
        return $this->get_header().PHP_EOL.
            $this->get_body().PHP_EOL.
            $this->get_footer().PHP_EOL;
    }
}

class AboutPage extends Page {
    
    public function __construct(Theme $theme) {
        $this->theme = $theme;
        $this->name = 'About Page';
    }
}

class CareersPage extends Page {
    
    public function __construct(Theme $theme) {
        $this->theme = $theme;
        $this->name = 'Careers Page';
    }
}

class WelcomePage extends Page {
    
    public function __construct(Theme $theme) {
        $this->theme = $theme;
        $this->name = 'Welcome Page';
    }
}