<?php



/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Command;

require_once 'Command.php';

/**
 * Description of RemoteControl
 *
 * @author Philip Adeoye
 */
class RemoteControl {
    public function submit(Command $command): string {
        return $command->execute();
    }
}
