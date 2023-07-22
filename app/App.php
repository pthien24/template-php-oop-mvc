<?php
class App{
    private  $__controller, $__action , $__params;
    function __construct(){
        global $routes;
        if(!empty($routes['default_controller'])){
            $this->__controller = $routes['default_controller'];
        }
        $this->__action = 'index';
        $this->__params =[];
        $this->handelUrl();
    }
    function getUrl(){
        $url ='/';
        if (!empty($_SERVER['PATH_INFO'])){
            $url = $_SERVER['PATH_INFO'];
        }
        return $url;
    }
    public function handelUrl(){
        $url = $this->getUrl();
        $urlArr =array_filter(explode("/", $url));
        $urlArr = array_values($urlArr);
        // xu ly contronller
        if(!empty($urlArr[0])){
            $this->__controller = ucfirst($urlArr[0]);
        }else{
            $this->__controller = ucfirst($this->__controller);
        }
        if(file_exists('app/controllers/'.($this->__controller).'.php')){
            require_once 'controllers/'.($this->__controller).'.php';
            //kiem tra class this->controller ton tai
            if  (class_exists($this->__controller)){
                $this->__controller = new $this->__controller();
                unset($urlArr[0]);
            }else {
                $this->loadtError();
            }
            
        }else
        {
            $this->loadtError();
        }
        // xu ly action
        if(!empty($urlArr[1])){
            $this->__action = ucfirst($urlArr[1]);
            unset($urlArr[1]);
        }else {

        }
        // xu ly params
        $this->__params =  array_values($urlArr);
        //kiem tra method
        if(method_exists($this->__controller, $this->__action)) {
            call_user_func_array([$this->__controller, $this->__action],$this->__params);
        }
    }
    public function loadtError($name = '404'){
        require_once 'error/'.$name.'.php';
    }
}