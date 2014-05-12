<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class addToCart extends CI_Controller {

    function __construct() {
     parent::__construct();  
        
        $this->load->model('productModel');
        $this->load->helper('url');
        $this->load->helper(array('form', 'url'));
        $this->load->library("pagination");
        $this->load->library('cart');
    }
	
	public function index(){ 
                
             
          
        }
        
        function add() {
        
        $id = $this->input->post('id');
        
        $product = $this->productModel->getProductById($id);
        $insert = array (
           'id' => $id, 
            'qty' => '1',
            'price' => $product->price,
            'name' => $product->name
        );
        
        $this->cart->insert($insert);
        $this->load->view('templates/header');
                $this->load->view('templates/navigation');
                $this->load->view('templates/content');
                $this->load->view('templates/footer');
      
        
    }
}