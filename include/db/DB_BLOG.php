<?php
    class DB_BLOG extends DB{
    	
    	protected $table_name="tbl_blogs";

        /**
         * @param array $wheres
         */
        function visitBlog($whwres=array()){
            global $mysqli;

            $where='';

            if (!empty($wheres))
            {
                $where='WHERE ';

                foreach ($wheres as $key=>$value)
                {
                    $where.="`$key`='$value' AND ";
                }
                $where=mb_substr($where,0,mb_strlen($where)-5);
            }

            //return $where;
			
            $q="update ".$this->table_name." set `visit`=`visit`+1 $where LIMIT 1";
            $mysqli->query($q) or die($mysqli->error);
        }

        /**
         * @param $id
         * @return string
         */
        function getURL($id){
            global $mysqli;

            $Details=$this->setWhere(array(
                "id"=>$id
            ))->setReturnFields(array(
                "title"
            ))->getDetails()->run();

            if(empty($Details))
                return 'blog/'.$id;

            return 'blog/'.$id.text2url($Details['title']);
        }

        /**
         * @param $id
         * @param $title
         * @return string
         */
        function getURLWithTitle($id,$title){
            return 'blog/'.$id.text2url($title);
        }

        function search($input){
            $limit=$this->makeLimit();
            $orderby=$this->makeOrderby();
            $returnFields=$this->makeReturnFields();

            $q="
                select $returnFields from
                (
                     select `id`,`title`,`link_title`,`text`,`date`,`visit` ,`enable`, 'blogs' as 'Type' from tbl_blogs
                     UNION
                     select `id`,`title`,`title` as 'link_title',`text`,`date`,`sort`,`enable` , 'portfolio' from tbl_portfolio
                 ) my_search
                where (`title` LIKE '%$input%' OR fnStripTags(`text`) like '%$input%') AND `enable`=1
        
                $orderby
                $limit
                ";

            $this->setSQL($q)->setCommandType(DB::TYPE_LIST);
            return $this;
        }

        function getSearchCount($input){
            $q="
                select count(1) as 'Tedad' from
                (
                     select `id`,`title`,`link_title`,`text`,`date`,`visit` ,`enable`, 'blogs' as 'Type' from tbl_blogs
                     UNION
                     select `id`,`title`,`title` as 'link_title',`text`,`date`,`sort`,`enable` , 'portfolio' from tbl_portfolio
                 ) my_search
                where (`title` LIKE '%$input%' OR fnStripTags(`text`) like '%$input%') AND `enable`=1
                ";

            $this->setSQL($q)->setCommandType(DB::TYPE_SELECT_FUNC);
            return $this;
        }
    } 
?>