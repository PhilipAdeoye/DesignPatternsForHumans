<?php 

/* 
* To change this license header, choose License Headers in Project Properties.
* To change this template file, choose Tools | Templates
* and open the template in the editor.
*/

namespace Memento;

require_once 'Editor.php';

$editor = new Editor();

$editor->type('This is the first sentence.');

$save1 = $editor->save();
echo $save1->getContent() .PHP_EOL;

$editor->type('This is second sentence.');

$save2 = $editor->save();
echo $save2->getContent() .PHP_EOL;

$editor->restore($save1);
echo $editor->getContent() . PHP_EOL;
