<?php

/**
 * Configuration class
 *
 * @author Cesare Piras
 */
class Settings {

    // database access variables
    public static $db_host = 'localhost';
    public static $db_user = 'cesarePiras';
    public static $db_password = 'varano9352';
    public static $db_name='amm2015_pirasCesare';
    
    private static $appPath;

    /**
     * It switches between localhost and the public server
     */
    public static function getApplicationPath() {
        if (!isset(self::$appPath)) {
            // return the current server
            switch ($_SERVER['HTTP_HOST']) {
                case 'localhost':
                    // local configuration
                    self::$appPath = 'http://' . $_SERVER['HTTP_HOST'] . '/amm2015/Progetto/';
                    break;
                case 'spano.sc.unica.it':
                    // public configuration
                    self::$appPath = 'http://' . $_SERVER['HTTP_HOST'] . '/amm2015/pirasCesare/amm2015/Progetto/';
                    break;

                default:
                    self::$appPath = '';
                    break;
            }
        }
        
        return self::$appPath;
    }

}

?>
