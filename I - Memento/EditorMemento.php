<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Memento;

/**
 * Description of EditorMemento
 *
 * @author Philip Adeoye
 */
class EditorMemento {
    
    protected $content;
    
    public function __construct(string $content) {
        $this->content = $content;
    }
    
    public function getContent(): string {
        return $this->content;
    }
}
