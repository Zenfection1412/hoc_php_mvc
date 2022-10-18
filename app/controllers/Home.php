<?php

class Home extends Controller {

    public function __construct(){
        
    }

    public function index(){
        //$data = $this->tb_product->getProduct();
        $data = $this->db->table('tb_product')->get();
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}
?>