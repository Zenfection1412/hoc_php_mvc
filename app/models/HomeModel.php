<?php
/**
 * Kế thừa từ class Model
 * 
 */
class HomeModel extends Model{
    protected $_table = 'tb_product';

    function __construct(){
        parent::__construct();
    }

    public function getList(){
        $data = $this->db->query("SELECT * FROM $this->_table");
        return $data;
    }
    public function getDetail($id){
        $data = ['item1', 'item2', 'item3'];
        return $data[$id];
    }
}
?>