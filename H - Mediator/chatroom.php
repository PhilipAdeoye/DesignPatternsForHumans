<?php 

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

namespace Mediator;

require_once 'user.php';

interface ChatRoomMediator {
    public function showMessage(User $user, string $message): string;
}

class ChatRoom implements ChatRoomMediator {
    
    public function showMessage(User $user, string $message): string {
        $time = date('M d, y H:i ');
        $sender = $user->getName();
        
        return $time . '['. $sender . ']: '. $message;
    }

}