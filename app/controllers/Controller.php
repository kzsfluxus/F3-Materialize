<?php

namespace app\controllers;
/**
 * BaseController
 * 
 */
class Controller {
    
    /**
     * 
     */
    const LAYOUT=self::LAYOUT;
    
    /**
     * The f3 variable
     * 
     * @var type 
     */
    protected $f3;
    
    /**
     * Constructor 
     *  
     */
    public function __construct() {
        
        $f3 = \Base::instance();
        $this->f3 = $f3;
            
    }
    
}
