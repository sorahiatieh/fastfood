<?php
  class DB_REGISTER extends DB{
  	protected $table_name="tbl_registers";

      /**
       * @param $username
       * @return bool
       */
	  function isUser($username){
		  global $mysqli;

		  $q="select count(1) from ".$this->table_name." where `username`='$username' LIMIT 1";

		  $result=$mysqli->query($q) or die($mysqli->error);
		  $row=$result->fetch_row();
		 $result->free_result();

		  if($row[0]==0)
			  return false;

		  return true;
	  }

      /**
       * @param $details
       * @return int|string
       */
      function registerUser($details){
          global $mysqli;

          $fields='';
          $values='';

          foreach($details as $key=>$value){
              $fields.="`$key`,";
              $values.="'$value',";

              if(strlen($fields)!=0){
                  $fields=mb_substr($fields,0,mb_strlen($fields)-1);
                  $values=mb_substr($values,0,mb_strlen($values)-1);
              }

              $q="insert into ".$this->table_name." ($fields) values ($values)";
              $mysqli->query($q) or die($mysqli->error);

              return mysqli_insert_id($mysqli);
          }
      }
  } 
?>