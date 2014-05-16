<?php

class ProductModel extends CI_Model {

    public function __construct() {
        $this->load->database();
    }
    
public function product_info(){
     $this->db->order_by('id','DESC');
         $query = $this->db->get('product');
            return $query->result();
    }
    
    public function getProductById($id)
    {
          $this->db->where('id', $id);
         
            $query = $this->db->get('product');
           
            return $query->result();
    }
    
    public function featured_item(){
     //$this->db->order_by('id','DESC');
     $query = $this->db->get_where('product', array('category' => '13'));
       return $query->result();
    }
    
    public function getTranId()
    {
         $this->db->order_by('trans_id','DESC');
     $query = $this->db->get('product_oder_detail', 1);
       return $query->result();
    }
}