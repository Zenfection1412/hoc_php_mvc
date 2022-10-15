<?php

class App{
    private $__controller;
    private $__action;
    private $__params;

    function __construct(){
        global $routes;
        if(!empty($routes['default_controller'])){
            $this->__controller = $routes['default_controller'];
        }
        $this->__action = 'index';
        $this->__params = array();

        $this->handleUrl();
    }

    public function getUrl(){

        if(!empty($_SERVER["REQUEST_URI"])){
            $url = $_SERVER["REQUEST_URI"];
        } else {
            $url = '/';
        }
        return $url;
    }
    public function handleUrl(){
        $url = $this->getUrl();
        $urlArr = array_filter(explode('/', $url));
        $urlArr = array_values($urlArr);

        // Xử lý controller
        if(!empty($urlArr[0])){
            $this->__controller = ucfirst($urlArr[0]);
        } else {
            $this->__controller = ucfirst($this->__controller);
        }
        if(file_exists('app/controllers/' . $this->__controller . '.php')){
            require_once 'app/controllers/' . $this->__controller . '.php';
            
            if(class_exists($this->__controller)){
                $this->__controller = new $this->__controller();
            } else {
                die('Class ' . $this->__controller . ' không tồn tại');
            }

            unset($urlArr[0]);
        } else {
            $this->loadError();
        }

        // Xử lý action
        if(!empty($urlArr[1])){
            $this->__action = $urlArr[1];
            unset($urlArr[1]);
        }

        //Xử lý params
        $this->__params = array_values($urlArr);

        //Xử lý method
        if(method_exists($this->__controller, $this->__action)){
            call_user_func_array(array($this->__controller, $this->__action), $this->__params);
        } else {
            die('Method ' . $this->__action . ' không tồn tại');
        }
    }

    public function loadError($name = '404'){
        require_once 'error/' . $name . '.php';
    }
}