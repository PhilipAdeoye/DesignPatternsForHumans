<?php

namespace FactoryMethod;

require_once 'HiringManager.php';
require_once 'Developer.php';

/**
 * Description of DevelopmentManager
 *
 * @author Philip Adeoye
 */
class DevelopmentManager extends HiringManager {
    
    protected function make_interviewer(): Interviewer {
        return new Developer();
    }
}
