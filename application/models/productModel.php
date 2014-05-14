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
          $this->db->where('id', $id);
         
            $query = $this->db->get('product');
           
            return $query->result();
    }
    
}