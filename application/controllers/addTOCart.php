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
            
             $data['product_info'] = $this->productModel->product_info();
        
           
        
		$this->load->view('templates/header');
                $this->load->view('templates/navigation');
                $this->load->view('templates/content',$data);
                $this->load->view('templates/footer');
                     
             
          
        }
        
        
}