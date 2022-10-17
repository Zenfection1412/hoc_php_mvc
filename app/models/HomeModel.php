<?php
/**
 * Kế thừa từ class Model
 * 
 */
class HomeModel extends Model{
    private $__table = 'tb_product';

    function __construct(){
        parent::__construct();
    }

    function tableFill(){
        return 'tb_product';
    }

    function fieldFill(){
        return '*';
    }

    public function getList(){
        $data = $this->db->query("SELECT * FROM $this->__table");
        return $data;
    }
    public function getDetail($id){
        $data = ['item1', 'item2', 'item3'];
        return $data[$id];
    }
}
?>