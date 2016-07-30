<?php

include_once 'User.php';
include_once 'Dipartimento.php';

/**
 * Aministrator class
 *
 * @author Cesare Piras
 */
class Administrator extends User {

    /**
     * Constructor
     */
    public function __construct() {
        // superclass constructor call
        parent::__construct();
        $this->setRuolo(User::Administrator);
    }
}

?>
