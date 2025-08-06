<?php
    class DB_COMMENT extends DB{
    	
    	protected $table_name="tbl_comments";

        function addComment($details){
            global $mysqli;

            $fields='';
            $values='';

            foreach($details as $key=>$value){
                $fields.="`$key`,";
                $values.="'$value',";

			}
			if(strlen($fields)!=0){
				$fields=mb_substr($fields,0,mb_strlen($fields)-1);
				$values=mb_substr($values,0,mb_strlen($values)-1);
			}

			$q="insert into ".$this->table_name." ($fields) values ($values)";
			//die($q);
			$mysqli->query($q) or die($mysqli->error);

			return mysqli_insert_id($mysqli);
            
        }

        function getListOfComment($id,$page=0,$count=0){
            global $mysqli;

            $limit='';
            if($page!=0 || $count!=0)
			{
				$page--;
				$start=$page*$count;
				$limit="LIMIT $start,$count";
			}
            
            $q="select * from ".$this->table_name." where `blog_id`='$id' and `confirm`=1 ORDER BY `date` DESC $limit";
            $result=$mysqli->query($q) or die($mysqli->error);

            $output='';

            while($field=$result->fetch_assoc()){
                $output[]=$field;
            }

            $result->free_result();

            return $output;
        }
        
        function getCountOfBlogsComment($id){
        	global $mysqli;
        	
        	$q="select count(1) from ".$this->table_name." where `blog_id`='$id'";
			
			$result=$mysqli->query($q) or die($mysqli->error);
			$row=$result->fetch_row();
			$result->free_result();

			return $row[0];
		}
    }
?>