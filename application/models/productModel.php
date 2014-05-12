<?php

class ProductModel extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    
public function product_info(){
    
         $query = $this->db->get('product');
            return $query->result();
    }
    
    public function getProductById($id)
    {
         $query = $this->db->get_where('product', array('id'=>$id))->result();
           return $query;
            return $query->result();
    }
}