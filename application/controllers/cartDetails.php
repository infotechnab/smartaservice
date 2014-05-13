<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CartDetails extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('productModel');
        $this->load->helper('url');
        $this->load->library('cart');
        $this->load->helper(array('form', 'url', 'date'));

    }

 
 
	public function index()
	{
           
		$this->load->view('templates/header');
                $this->load->view('templates/navigation');
              
                $this->load->view('templates/cartDetails');
              
                $this->load->view('templates/footer');
                
	}
        
     
    function remove($rowid) {
        $this->cart->update(array(
            'rowid' => $rowid,
            'qty' => 0
        ));
        redirect('cartDetails');
    }

    function clear() {
        $this->cart->destroy();
        redirect('cartDetails');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */