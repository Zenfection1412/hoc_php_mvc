<?php
/**
 * Kế thừa từ class Model
 * 
 */
class HomeModel {
    protected $table = 'products';

    public function getList(){
        $data = ['item1', 'item2', 'item3'];
        return $data;
    }
    public function getDetail($id){
        $data = ['item1', 'item2', 'item3'];
        return $data[$id];
    }
}
?>