<?php 

class music extends db{
    public function SelectFromTable($limit =6)
    {
      $sql = "select * from music limit ".$limit;
      $result = mysqli_query($this->dbcon , $sql);
      if(!$result){
          echo "متاسفانه خطایی رخ داده ".mysqli_error($this->dbcon);
      }  
      return $result;
    }
}