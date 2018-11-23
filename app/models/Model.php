<?php

namespace app\models;
/**
 * Az alap model osztály
 * 
 */
class Model {
    
    /**
     * A $db változó
     * 
     * @var mixed 
     */
    protected $db;
    
    /**
     * Konstruktor
     * 
     */
    public function __construct() {
        
        $f3 = \Base::instance();
        $db = new \DB\SQL(
                $f3->get('db'),
                $f3->get('username'),
                $f3->get('password'),
                array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION)
        );
        $this->db = $db;
    }
    
}
