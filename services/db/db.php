<?php

class db {

    public $server   = "localhost";
    public $username = "root";  
    public $password = "";
    public $dbname   = "mahdaviat";

    public $dbcon ;
    public function __construct()
    {
      $this->dbcon = mysqli_connect($this->server,$this->username,
                                    $this->password,$this->dbname);
      if(!$this->dbcon){
          echo "no";
      }
      return $this -> dbcon;
      
    }
}