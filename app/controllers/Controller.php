<?php

namespace app\controllers;
/**
 * Alap controller osztály
 * 
 */
class Controller {
    
    /**
     * 
     */
    const LAYOUT=self::LAYOUT;
    
    /**
     * Az $f3 változó
     * 
     * @var type 
     */
    protected $f3;
    
    /**
     * Konstruktor 
     *  
     */
    public function __construct() {
        
        $f3 = \Base::instance();
        $this->f3 = $f3;
            
    }
    
}
