<?php
    class Core{
         //URL Format --> /controller/method/params
         protected $currentController = 'Pages';
         protected $currentMethod = 'index';
         protected $param = [];

         public function __construct(){
            print_r($this->getURL());
         }

         public function getURL(){
            if(isset($_GET['url'])){
                $url = rtrim($_GET['url'], '/');
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode('/',$url);

                return $url;
            }
         }
    }
?>