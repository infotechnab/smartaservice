<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class View extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('productModel');
        $this->load->helper('url');
        $this->load->library('cart');
        $this->load->helper(array('form', 'url', 'date'));

    }

 
 
	public function index()
	{
            
             $data['product_info'] = $this->productModel->product_info();     
                  
		$this->load->view('templates/header');
                $this->load->view('templates/navigation');
                $this->load->view('templates/content',$data);
                $this->load->view('templates/cart');
                $this->load->view('templates/sidebarview');
                $this->load->view('templates/footer');
                
	}
        
        
        
        public function details(){
            $this->load->view('templates/header');
                $this->load->view('templates/navigation');
                $this->load->view('templates/details');
                $this->load->view('templates/sidebar');
                $this->load->view('templates/footer');
        }
        
        public function login(){
            $this->load->view('templates/header');
                $this->load->view('templates/navigation');
                $this->load->view('templates/login');
             
                $this->load->view('templates/footer');
        }
        
         function add() {
        
        $id = $_POST['itemid'];

        $product = $this->productModel->getProductById($id);
        
        foreach ($product as $prod) {
            $name = $prod->name;
            $price = $prod->price;
            
        }
       
if ($this->cart->contents()) { 
    $cart = $this->cart->contents();
  
                        foreach ($cart as $item) { 
                            if(isset($item['id'])){
                           if($item['id']==$id)
                           { 
                             
                               $newQnt = 1;
                               $newQnt = $item['qty']+1; 
                               
                           }
                                    
                                    else 
                                    {
                                        $newQnt = '1';
                                    }
                                    }
                        }
   
}
         

   
        $insert = array(
            'id' => $id,
            'qty' => $newQnt,
            'price' => $price,
            'name' => $name
        );
   $this->cart->insert($insert);
        $this->load->view('templates/cart');
     
    }

    function remove($rowid) {
        $this->cart->update(array(
            'rowid' => $rowid,
            'qty' => 0
        ));
        redirect('view');
    }

    function clear() {
        $this->cart->destroy();
        redirect('view');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */