<?php 

namespace FactoryMethod;

/*
 * Interface Credential
 */
interface Credential {
    public function validate();
}

/*
 * Classes that implement the Credential interface
 */
class UsernameAndPassword implements Credential {
    public function validate() {
        echo 'Username and password checks out';
    }
}

class FingerPrint implements Credential {
    public function validate() {
        echo 'Fingerprint checks out';
    }
}

class RetinaScan implements Credential {
    public function validate() {
        echo 'Retina scan checks out';
    }
}

/*
 * Base Authenticator
 */
abstract class Authenticator {
    
    // Factory Method
    abstract protected function create_credential(): Credential;
    
    public function authenticate() {
        $credential = $this->create_credential();
        $credential->validate();
    }
}

/*
 * Concrete Authenticators
 */
class BasicAuthenticator extends Authenticator {
    protected function create_credential(): Credential {
        return new UsernameAndPassword();
    }
}

class BiometricAuthenticator extends Authenticator {
    protected function create_credential(): Credential {
        
        // we choose to return a new FingerPrint, but we could also 
        // return a RetinaScan or UsernameAndPassword and the calling
        // code wouldn't need to change
        return new FingerPrint();
    }
}

