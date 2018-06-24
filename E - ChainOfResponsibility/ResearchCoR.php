<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CoR;

require_once 'research_personnel_classes.php';

/**
 * Description of ResearchCoR
 *
 * @author Philip Adeoye
 */
class ResearchCoR {
    public $research_assistant;
    public $research_specialist;
    public $research_coordintor;
    public $research_manager;
    public $principal_investigator;
    
    public function __construct() {
        $this->research_assistant = new ResearchAssistant();
        $this->research_specialist = new ResearchSpecialist();
        $this->research_coordintor = new ResearchCoordinator();
        $this->research_manager = new ResearchManager();
        $this->principal_investigator = new PrincipalInvestigator();
        
        $this->research_assistant->setSuccessor(
            $this->research_specialist->setSuccessor(
                $this->research_coordintor->setSuccessor(
                    $this->research_manager->setSuccessor($this->principal_investigator)
                )
            )
        );            
    }
    
    public function handleResearchRequest(Request $request): string {
        return $this->research_assistant->handleRequest($request);
    }
}
