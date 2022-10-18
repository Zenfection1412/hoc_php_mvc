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

    public function getListProduct(){
        $data = $this->db->table($this->__table)->where('price', '>', 2)->where('discount', '>', '10')->orderBy('id_product')->get();
        return $data;
    }
    public function insertProduct($data){
        $this->db->table($this->__table)->insert($data);
    }

    public function deleteProductID($id){
        $this->db->table($this->__table)->where('id_product', '=', $id)->delete();
    }
    public function test(){
        $data = $this->db->table($this->__table)->count();
        return $data;
    }

}
?>