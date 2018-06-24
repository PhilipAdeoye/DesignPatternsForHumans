<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace CoR;

/**
 *
 * @author Philip-Mac
 */

interface IRequestable {
    public function fulfil(): string;
    public function getIssue(): string;
}

abstract class Request implements IRequestable {
    
    protected $issue;
    
    public function __construct($issue) {
        $this->issue = $issue;
    }
    
    public function getIssue(): string {
        return $this->issue;
    }
    public function fulfil(): string {
        return $this->issue . ' has been taken care of';
    }
}

class SimpleResearchRequest extends Request {
    
}
class SpecialResearchRequest extends Request {
    
}
class CoordinatedResearchRequest extends Request {
    
}
class ManagedResearchRequest extends Request {
    
}
class HighLevelResearchRequest extends Request {
    
}