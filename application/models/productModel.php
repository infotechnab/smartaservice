<?php

class ProductModel extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    
public function product_info(){
    
         $query = $this->db->get('product');
            return $query->result();
    }
    
    public function getProductById($productId)
    {
          $this->db->where('id', $productId);
         $this->db->order_by("id", "desc");
            $query = $this->db->get('product');
           
            return $query->result();
    }
}