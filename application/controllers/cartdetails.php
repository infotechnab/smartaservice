<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class CartDetails extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('productmodel');
        $this->load->helper('url');
        $this->load->library('cart');
        $this->load->helper(array('form', 'url', 'date'));
        $this->load->helper('string');
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
                $newrow = 'item_row_' . $item['id'];
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

    function insert_cart_item() {
        $cart = $this->cart->contents();

        $tr = 0;
        $trans_id = $this->productModel->getTranId();
        foreach ($trans_id as $tranId) {
            $tr = $tranId->trans_num;
        }

        $a = "TRD";
        $tr = $tr + 1;
        $tid = $a . $tr;


        foreach ($cart as $item) {
            var_dump($item);
            if ($item) {
                mysql_query("INSERT INTO `product_oder_detail` (o_id,p_id,qty,trans_id,trans_num) 
       VALUES ('1','" . $item['id'] . "', '" . $item['qty'] . "', '$tid', '$tr')");
            }
        }

        $this->load->view('templates/inserted');
    }

    function display() {
        if ($_POST) { //Post Data received from product list page.
            foreach ($_POST['item_name'] as $key => $itmname) {
                
		
		//create items for session
		$paypal_product['items'][] = array('itm_name'=>$_POST['item_name'][$key],
											
											'itm_code'=>$_POST['item_code'][$key], 
											'itm_qty'=>$_POST['item_qty'][$key]
											);
                
               
            }
            
            var_dump($paypal_product);
        }
    }

    function login()
    {
         $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|xss_clean');
        $this->form_validation->set_rules('pass', 'Password', 'trim|required|xss_clean|callback_check_database');
        if ($this->form_validation->run() == FALSE) {
            //$this->index();
        } else {
            $this->load->model('dbmodel');
                        $data['detail'] = $this->productmodel->validate();
            
                       if(!empty($data))
           
            {
                               
               $this->load->view('templates/header');
        $this->load->view('templates/navigation');
        $this->load->view('templates/userRegistrationAndShipping',$data);
        $this->load->view('templates/footer');

                
            }else
            {
                $this->session->set_flashdata('message', 'Username or password incorrect');
                redirect('view/login');
            }
        }
    }

    function udetail()
    {
        
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */