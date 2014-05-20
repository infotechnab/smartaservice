<?php

class Productmodel extends CI_Model {

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
    //method to verify the product info
    public function get_product_data_verify($product_code)
    {
        $this->db->select('name,description,price');
         $this->db->where('id', $product_code);
      $this->db->limit(1);
       $query = $this->db->get('product');
        return $query->result();
    }
    
    function category_list()
    {
        $query = $this->db->get('category');
        return $query->result();
    }
    function category_list_id($id)
    {
        
        $this->db->where('id',$id);
         $query = $this->db->get('category');
        return $query->result();
    }
    function get_product($id)
    {
         $this->db->where('category',$id);
         $query = $this->db->get('product',3);
         return $query->result();
                
    }
    
    function get_page($id)
    {
        $this->db->where('id',$id);
        $query = $this->db->get('page');
        return $query->result();
        
    }
    
    function validate() {
       // $email = $this->input->post('email');
           //     die($email);
                
        $this->db->where('user_email', $this->input->post('email'));
        $this->db->where('user_pass', md5($this->input->post('pass')));
        $this->db->where('user_type',1);
        $query = $this->db->get('user');
        return $query->result();
       
    }
}