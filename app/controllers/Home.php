<?php

class Home{
    function __construct(){
        
    }

    public function index(){
        echo 'Trang chủ';
    }
    
    public function detail($id = '', $slug = ''){
        echo "Id sản phẩm: " . $id;
        echo "<br>";
        echo "Slug sản phẩm: " . $slug;
    }

    public function search(){
        $keyword = $_GET('keyword');
        echo "Search = " . $keyword;
    }
}
?>