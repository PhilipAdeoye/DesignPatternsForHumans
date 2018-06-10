<?php 

require 'DoorFactory.php';

/*
    Simple factory simply generates an instance for client without exposing any 
 *  instantiation logic to the client
 *  
 * In object-oriented programming (OOP), a factory is an object for creating other 
 * objects – formally a factory is a function or method that returns objects of a 
 * varying prototype or class from some method call, which is assumed to be "new".
 * 
 */


$door = SimpleFactory\DoorFactory::make_door(100, 200);


echo 'Width: ' . $door->get_width();
echo PHP_EOL;
echo 'Height: ' .$door->get_height();

