<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class Db { 
      
    private $mysql; 
      
    function __construct() { 
        $this->mysql = new mysqli('localhost', 'root', '', 'db') or die('problem'); 
    } 
} // end class
?>
