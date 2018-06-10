<?php 

require_once 'classes.php';

$basicAuth = new FactoryMethod\BasicAuthenticator();
$biometricAuth = new FactoryMethod\BiometricAuthenticator();

$basicAuth->authenticate();
echo PHP_EOL;
$biometricAuth->authenticate();

