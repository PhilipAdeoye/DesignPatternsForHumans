<?php 

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

namespace CoR;

require_once 'ResearchPersonnel.php';

class ResearchAssistant extends ResearchPersonnel {
    public function __construct() {
        $this->handleable_requests = [SimpleResearchRequest::class];
    }
}

class ResearchSpecialist extends ResearchPersonnel {
    public function __construct() {
        $this->handleable_requests = [
            SimpleResearchRequest::class, 
            SpecialResearchRequest::class
        ];
    }
}

class ResearchCoordinator extends ResearchPersonnel {
    public function __construct() {
        $this->handleable_requests = [
            SpecialResearchRequest::class, 
            CoordinatedResearchRequest::class
        ];
    }
}

class ResearchManager extends ResearchPersonnel {
    public function __construct() {
        $this->handleable_requests = [
            CoordinatedResearchRequest::class, 
            ManagedResearchRequest::class
        ];
    }
}

class PrincipalInvestigator extends ResearchPersonnel {
    public function __construct() {
        $this->handleable_requests = [            
            HighLevelResearchRequest::class
        ];
    }
}