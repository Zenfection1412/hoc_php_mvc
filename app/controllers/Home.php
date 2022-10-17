<?php

class Home extends Controller {
    public $model;
    public function __construct(){
        $this->model = $this->models('HomeModel');
    }

    public function index(){
        $data = $this->model->getList();
        echo '<pre>';
        print_r($data);
        echo '</pre>';

        // $detail = $this->model->getDetail(0);
        // echo '<pre>';
        // print_r($detail);   
        // echo '</pre>';
    }

    
}
?>