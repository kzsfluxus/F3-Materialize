<?php

namespace app\controllers;
use app\controllers\Controller as BaseController;

/**
 *  Site class 
 * 
 */
class Site extends BaseController {
    
    /**
     * 
     */
    const LAYOUT='layout\layout.html';
    
    /**
     * Render the main page
     * 
     * @param mixed $f3
     */
    public function index($f3) {

        $f3->set('content', 'site\site.html');
        echo \View::instance()->render(self::LAYOUT);
    }
}
