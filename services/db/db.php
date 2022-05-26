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
      mysqli_query($this->dbcon, 'SET NAMES utf8');
      return $this -> dbcon;
      
    }
}