<?php

class Product extends Controller{
    public $data = [];
    function __construct(){
        $product = $this->models('ProductModel');
    }
    public function index(){
        
    }   
    
    public function lists(){
        $product = $this->models('ProductModel');
        $data = $product->getProductList();

        $title = 'Danh sách sản phẩm';

        $this->data['product_list'] = $data;
        $this->data['page_title'] = $title;

        $this->render('products/lists', $this->data);
    }
    public function detail($id = 0){
        $product = $this->models('ProductModel');
        $this->data['info'] = $product->getDetail($id);
        $this->render('products/detail', $this->data);
    }
}
?>