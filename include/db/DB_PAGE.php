<?php
  class DB_PAGE extends DB{
      
		protected $table_name="tbl_pages";

      /**
       * @param $pagename
       * @return string
       */
      function getLinkTitle($pagename){
          $pageDetails=$this->setWhere(array(
              "name"=>$pagename
          ))->getDetails()->run();

          if (empty($pageDetails))
              return '';

          return $pageDetails['link_title'];
      }

      /**
       * @param $page
       * @return string
       */
      function getURL($page){
          return 'pages/'.$page.text2url($this->getLinkTitle($page));
      }

      /**
       * @param $page_name
       * @param $title
       * @return string
       */
      function getURLWithTitle($page_name,$title){
          return 'pages/'.$page_name.text2url($title);
      }
}
?>