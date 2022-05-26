<?php

class book extends db{

    public function SelectFromTable($limit =6)
    {
      $sql = "select * from book limit ".$limit;
      $result = mysqli_query($this->dbcon , $sql);
      if(!$result){
          echo "متاسفانه خزایی رخ داده ".mysqli_error($this->dbcon);
      }  
      return $result;
    }
}