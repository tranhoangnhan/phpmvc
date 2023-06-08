<?php
class DB {
    public $conn;
    protected $server = 'localhost';
    protected $username = 'root';
    protected $password = '';
    protected $dbname = 'mvcda1';

    function __construct(){
        $this->conn = mysqli_connect($this->server, $this->username, $this->password);
        mysqli_select_db($this->conn,$this->dbname);
        mysqli_query($this->conn,"SET NAMES 'utf8'");
    } 
}

