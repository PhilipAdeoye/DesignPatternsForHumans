<?php

namespace FactoryMethod;

require_once 'Interviewer.php';

/**
 * Description of CommunityExecutive
 *
 * @author Philip Adeoye
 */
class CommunityExecutive implements Interviewer {
    
    public function ask_questions() {
        echo 'Community Executive: Asking about community building';
    }
    
}
