<?php
    class Core{
         //URL Format --> /controller/method/params
         protected $currentController = 'Pages';
         protected $currentMethod = 'index';
         protected $param = [];

         public function __construct(){
            $this->getURL();
         }

         public function getURL(){
            echo $_GET['url'];
         }
    }
?>