<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Command;

/**
 *
 * @author Philip-Mac
 */
interface Command {
    
    public function execute();
    public function undo();
    public function redo();
}
