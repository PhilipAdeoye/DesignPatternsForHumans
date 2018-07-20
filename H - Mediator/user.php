<?php 

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

namespace Mediator;

require_once 'chatroom.php';

class User {
    
    protected $name;
    protected $chatMediator;
    
    public function __construct(string $name, ChatRoomMediator $chatMediator) {
        $this->name = $name;
        $this->chatMediator = $chatMediator;
    }
    
    public function getName(): string {
        return $this->name;
    }
    
    public function send(string $message): string {
        return $this->chatMediator->showMessage($this, $message);
    }
}
