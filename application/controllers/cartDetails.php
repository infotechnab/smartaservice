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

    public function index() {

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

    function checkout() {
        $this->load->view('templates/header');
        $this->load->view('templates/navigation');

        $this->load->view('templates/checkout_form');

        $this->load->view('templates/footer');
    }

    function update() {

        if ($this->cart->contents()) {
            $cart = $this->cart->contents();

            foreach ($cart as $item) {
                $newqty = 'item_qnt_' . $item['id'];
                $newrow = 'item_row_'.$item['id'];
                $rowid = $_POST[$newrow];
                if (isset($_POST[$newqty])) {
                    if ($item['qty'] != $_POST[$newqty]) {


                        $newQnt = $_POST[$newqty];
                        
                        $this->cart->update(array(
            'rowid' => $rowid,
            'qty' => $newQnt
        ));
                        
                    }
                }
             
            }
        }
        redirect('cartDetails');
    }

    
    function insert_cart_item()
    {
            $cart = $this->cart->contents();
            
              foreach ($cart as $item)
               {
                 if($item) {
                    mysql_query("INSERT INTO `product_oder_detail` (o_id,p_id, qty) 
       VALUES ('1','".$item['id']."', '".$item['qty']."')");
                
                 }
                 }
            
          $this->load->view('templates/inserted');
    }
    
    
}



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */