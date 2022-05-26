<?php

class video extends db{

    public function SelectFromTable()
    {
      $sql = "select * from video limit 3";
      $result = mysqli_query($this->dbcon , $sql);
      if(!$result){
          echo "متاسفانه خزایی رخ داده ".mysqli_error($this->dbcon);
      }  
      return mysqli_fetch_assoc($result);
    }
}