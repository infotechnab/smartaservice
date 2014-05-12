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
        
        function addToCart($productId) {
        
        
        
        $item = $this->productModel->getProductById($productId);
        
        var_dump($item);
        $this->cart->insert($item);
        
        redirect('product');
        
    }
}