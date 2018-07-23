<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Memento;

require_once 'EditorMemento.php';

/**
 * Description of Editor
 *
 * @author Philip Adeoye
 */
class Editor {
    
    protected $content = '';
    
    public function type(string $words) {
        $this->content = $this->content . ' ' .$words;
    }
    
    public function getContent(): string {
        return $this->content;
    }
    
    public function save(): EditorMemento {
        return new EditorMemento($this->content);
    }
    
    public function restore(EditorMemento $memento) {
        $this->content = $memento->getContent();
    }
}
