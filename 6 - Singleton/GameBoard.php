<?php



/*
 * Singletons 
 * 1. Are not extensible - mark as final
 * 2. Have a private constructor * 
 * 3. Are not cloneable
 * 4. Are not serializable
 * 5. 
 */

namespace Singleton;

/**
 * Description of GameBoard
 *
 * @author Philip Adeoye
 */
final class GameBoard {
    
    // The class variable to hold the instance
    private static $instance;
    
    private function __construct() { }

    // A function to get the only instance
    public function get_instance(): GameBoard {
        if (!self::$instance) {
            self::$instance = new self();
        }
        
        return self::$instance;
    }
    
    private function __clone() { }
    private function __wakeup() { }
    
}
