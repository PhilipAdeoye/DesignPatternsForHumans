<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CoR;

require_once 'request.php';

/**
 * Description of ResearchPersonnel
 *
 * @author Philip Adeoye
 */
abstract class ResearchPersonnel {
    
    protected $successor;
    protected $handleable_requests = [];

    public function setSuccessor(ResearchPersonnel $successor): ResearchPersonnel {
        $this->successor = $successor;
        return $this;
    }
    
    public function handleRequest(Request $request): string {
        if ($this->canHandleRequest($request)) {
            return get_called_class(). ' says: '. $request->fulfil();
        }
        else if ($this->successor) {
            return $this->successor->handleRequest($request);
        }
        else {
            return 'Unhandleable request. Sorry';
        }
    }
    
    protected function canHandleRequest(Request $request): bool {
        return $request && in_array(get_class($request), $this->handleable_requests);
    }
    
}
