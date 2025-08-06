<?php
    class Ajax extends Exception{
        public $Status=0;
        public $Text="";

        public function makeOutput(){
            unset($this->xdebug_message);
            exit(json_encode($this,JSON_UNESCAPED_UNICODE));
        }
    }
?>