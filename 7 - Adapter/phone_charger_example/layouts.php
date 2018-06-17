<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace PhoneCharger;

/**
 *
 * @author Philip-Mac
 */

interface AppleLayout {
    public function recharge(): string;
    public function use_lightning(): string;
}

interface UniversalLayout {
    public function recharge(): string;
    public function use_micro_usb(): string;
}
