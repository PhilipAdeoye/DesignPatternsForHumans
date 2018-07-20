<?php 

namespace Mediator;

require_once 'chatroom.php';

$chatroom = new ChatRoom();

$muhammad = new User('Muhammad', $chatroom);
$zainab = new User('Zainab', $chatroom);

echo $muhammad->send('Hi!') . PHP_EOL;
echo $zainab->send('Hey there! How are you?') . PHP_EOL;
