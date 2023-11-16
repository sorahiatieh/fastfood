<?php
    function getPageDetails($page_name){
        global $mysqli;
        $q="select * from tbl_pages where `name`='$page_name' and `enable`=1";
        $result=$mysqli-query($mysqli,$q);
        $field=mysqli_fetch_assoc($result);

        mysqli_free_result($result);

        return $field;
    }

    function isPage(){

    }

    function registerUser(){

    }

?>