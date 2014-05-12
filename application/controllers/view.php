<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class View extends CI_Controller {

	 function __construct()
 {
   parent::__construct();  
      
        $this->load->model('productModel');
        $this->load->helper('url');
     $this->load->library('cart');
        $this->load->helper(array('form', 'url', 'date'));
     
      
 }
 
 
	public function index()
	{
            
             $data['product_info'] = $this->productModel->product_info();
        
             var_dump($data);
        
		$this->load->view('templates/header');
                $this->load->view('templates/navigation');
                $this->load->view('templates/content',$data);
                $this->load->view('templates/footer');
                
	}
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */