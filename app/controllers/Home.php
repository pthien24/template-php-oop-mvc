<?php
class Home extends Controller{
    public $model;
    public function __construct() {
        $this->model = $this->model('HomeModel');
}
    public function index(){
        $data  = $this->model->getList();
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }

}