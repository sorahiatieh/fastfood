<?php

//defined("_AS") or die("Access denied!");
/**
 * @param $input
 * @return string
 */
function secure($input)
{
    global $mysqli;

    $input=str_ireplace('ي','ی',$input);
    $input=str_ireplace('ك','ک',$input);


    $input=stripslashes($input);

    $input=$mysqli->real_escape_string($input);

    return $input;
}
/*static function secure($text,$code=false)
{
    $text=str_replace("ي","ی",$text);
    $text=str_replace("ك","ک",$text);

    if(get_magic_quotes_gpc())
        $text=stripslashes($text);

    if($code)
    {
        $text=htmlspecialchars($text,ENT_QUOTES);
    }

    if(self::$mysqli!=null)
    {
        return self::$mysqli->escape_string($text);
    }
    else
    {
        return $text;
    }
}*/
/**
 * @return mixed
 */
function getIP(){
    return $_SERVER['REMOTE_ADDR'];
}

/**
 * @return mixed
 */
function getRealIP(){
    return getIP();
}

/**
 * @param $text
 * @param string $extension
 * @return string
 */
function text2url($text,$extension='.html'){
    $text=preg_replace('/\s+/','-',$text);

    return '-'.$text.$extension;
}
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