<?php

class Product extends Controller{
    function __construct(){
        $this->model = $this->models('ProductModel');
    }
    
    public function index(){
        echo 'Danh sách sản phẩm';
        $data = $this->model->getProductList();
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}
?>