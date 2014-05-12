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
        
           
        
		$this->load->view('templates/header');
                $this->load->view('templates/navigation');
                $this->load->view('templates/content',$data);
                $this->load->view('templates/footer');
                
	}
        
        
        
        public function details(){
            $this->load->view('templates/header');
                $this->load->view('templates/navigation');
                $this->load->view('templates/details');
                $this->load->view('templates/sidebar');
                $this->load->view('templates/footer');
        }
        
        
        
         function add() {
        
        $id = $this->input->post('id');
       //die($id);
        $product = $this->productModel->getProductById($id);
        //var_dump($product);
        foreach($product as $prod)
        {
            $name = $prod->name;
            $price = $prod->price;
        }
        
        
        //echo $product->price;
        $insert = array (
           'id' => $id, 
            'qty' => '1',
            'price' => $price,
            'name' => $name
        );
        //var_dump($insert);
        
        $this->cart->insert($insert);
       redirect('view');
        
    }
        
       function remove($rowid)
       {
           $this->cart->update(array(
               'rowid'=>$rowid,
               'qty'=>0
           ));
           redirect('view');
       }
       
       function clear()
       {
           $this->cart->destroy();
           redirect('view');
       }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */