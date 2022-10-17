<?php

class Home extends Controller {
    public $tb_product;
    public function __construct(){
        $this->tb_product = $this->models('HomeModel');
    }

    public function index(){
        $data = $this->tb_product->count();
        // $data = $this->model->getList();
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