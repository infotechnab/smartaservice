<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Payments extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('productModel');
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

function do_purchase() {
        $config['business'] = 'infotechnab-facilitator_api1.yahoo.com';
        $config['cpp_header_image'] = ''; //Image header url [750 pixels wide by 90 pixels high]
        $config['return'] = 'http//localhost/smartaservices/paymets/notify_payment';
        $config['cancel_return'] = 'http//localhost/smartaservices/paymets/cancel_payment';
        $config['notify_url'] = 'http//localhost/smartaservices/paymets/notify_payment'; //IPN Post
        $config['production'] = FALSE; //Its false by default and will use sandbox
        //$config['discount_rate_cart'] = 20; //This means 20% discount
        $config["invoice"] = random_string('numeric',8); //The invoice id
        $this->load->library('paypal', $config);
        #$this->paypal->add(<name>,<price>,<quantity>[Default 1],<code>[Optional]);
        $this->paypal->add('T-shirt', 2.99, 6); //First item
        $this->paypal->add('Pants', 40); //Second item
        $this->paypal->add('Blowse', 10, 10, 'B-199-26'); //Third item with code
        $this->paypal->pay(); //Proccess the payment
    }
    
    function notify_payment()
    {
        
        $received_data = print_r($this->input->post(),TRUE);
        echo '<pre>'.$received_data.'</pre>';
    }
    function cancel_payment()
    {
        echo "Sorry  budy you didnt get the payemnt. Its canceled";
    }
}