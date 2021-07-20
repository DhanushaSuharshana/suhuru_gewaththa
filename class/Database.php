<?php

/**

 * Description of User

 *

 * @author Suharshana DsW

 * @web www.nysc.lk

 * */
class Database {

//    private $host = 'mysql.nysc.lk';
//    private $name = 'nysc_opdb';
//    private $user = 'nysc';
//    private $password = 'fBc7qFr9@1973';
//    public  $DB_CON = NULL;

    private $host = 'localhost';
    private $name = 'nysc';
    private $user = 'root';
    private $password = '';
    public $DB_CON = NULL;

    public function __construct() {

        $this->DB_CON = mysqli_connect($this->host, $this->user, $this->password, $this->name);
    }

    public function readQuery($query) {
        $result = mysqli_query($this->DB_CON, $query) or die(mysqli_error());
        return $result;
    }

}
