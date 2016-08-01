<?php

include_once 'User.php';

/**
 * User class
 *
 * @author Cesare Piras
 */
class Utente extends User {

    private $eta;

    /**
     * Constructor
     */
    public function __construct() {
        //superclass constructor call
        parent::__construct();
        $this->setRuolo(User::Utente);
    }
    
    public function getEta() {
        return $this->eta;
    }

    public function setEta($eta) {
        $this->eta = $eta;
        return true;
    }
}

?>
