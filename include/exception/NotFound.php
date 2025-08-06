<?php
    class NotFound extends Exception{
        private static $contentMessage="صفحه مورد نظر شما یافت نشد!";
        
        function __construct($matn=""){
            if($matn!='')
                self::$contentMessage=$matn;
        }
        
        static function getContentMessage(){
            return self::$contentMessage;
        }
    }
?>