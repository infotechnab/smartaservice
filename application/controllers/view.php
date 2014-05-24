<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class View extends CI_Controller {

    function __construct() {
        parent::__construct();

        $this->load->model('productmodel');
        $this->load->helper('url');
        $this->load->library('cart');
        $this->load->helper(array('form', 'url', 'date'));
    }

    public function index() {     //fetching data from database of the product
        
      

        $data['product_info'] = $this->productmodel->product_info();
        
          $data['featureItem'] = $this->productmodel->featured_item();
          $data['category'] = $this->productmodel->category_list();
          //var_dump($data);
           $data['slider_json'] = json_encode($data['featureItem']);
        $this->load->view('templates/header');
        $this->load->view('templates/navigation');
       
        $this->load->view('templates/content', $data);
         
        $this->load->view('templates/cart');
        $this->load->view('templates/sidebarview',$data);
        $this->load->view('templates/footer');
    }

 
 
        
        
        public function details($id){
            $data['product_info'] = $this->productmodel->product_info();
        
          $data['featureItem'] = $this->productmodel->featured_item();
          $data['category'] = $this->productmodel->category_list();
            if(isset($id)){
            $data['product'] = $this->productmodel->getProductById($id);
           
            $this->load->view('templates/header');
                $this->load->view('templates/navigation');
                $this->load->view('templates/details', $data);
                $this->load->view('templates/cart');
                $this->load->view('templates/footer');
            }
 else {
                redirect();
 }
        }
        
        public function login(){
            $this->load->view('templates/header');
                $this->load->view('templates/navigation');
                $this->load->view('templates/login');      
                $this->load->view('templates/footer');
        }
        
     

    function add() {   //function to add item to the cart

        $id = $_POST['itemid'];
        $product = $this->productmodel->getProductById($id);


        foreach ($product as $prod) {
            $name = $prod->name;
            $price = $prod->price;
            $desc = $prod->description;
            $image1 = $prod->image1;
            
        }
        $newQnt = 1;
        if ($this->cart->contents()) {
            $cart = $this->cart->contents();

            foreach ($cart as $item) {
                if (isset($item['id'])) {
                    if ($item['id'] == $id) {

                        $newQnt = 1;
                        $newQnt = $item['qty'] + 1;
                    }

                }
            }
        }

        $insert = array(
            'id' => $id,
            'qty' => $newQnt,
            'price' => $price,
            'name' => $name,
            'desc' =>$desc,
            'image1' => $image1
        );
        $this->cart->insert($insert);
        $this->load->view('templates/cart');
    }

    function remove($rowid) {           //function to remove item from the cart
        $this->cart->update(array(
            'rowid' => $rowid,
            'qty' => 0
        ));
        redirect('view');
    }

    function clear() {          //function to clear the cart
        $this->cart->destroy();
        redirect('view');
    }

    function cart_details() {   //function to goto cart details
        $this->load->view('templates/header');
        $this->load->view('templates/navigation');
        $this->load->view('templates/cartDetails');
        $this->load->view('templates/footer');
    }
    
    function category($id)
    {
          $data['product_info'] = $this->productmodel->product_info();
        
          $data['featureItem'] = $this->productmodel->featured_item();
          $data['category'] = $this->productmodel->category_list();
          $data['categoryId'] = $this->productmodel->category_list_id($id);
          $data['product'] = $this->productmodel->get_product($id);
          //var_dump($data);
           $data['slider_json'] = json_encode($data['featureItem']);
        $this->load->view('templates/header');
        $this->load->view('templates/navigation');
       
        $this->load->view('templates/category_page', $data);
         
        $this->load->view('templates/cart');
        $this->load->view('templates/sidebarview',$data);
        $this->load->view('templates/footer');
    }

    function page($id)
    {
         $data['product_info'] = $this->productmodel->product_info();
        
          $data['featureItem'] = $this->productmodel->featured_item();
          $data['category'] = $this->productmodel->category_list();
         // $data['categoryId'] = $this->productmodel->category_list_id($id);
       //  $data['category'] = $this->productmodel->category_list_id();
          //var_dump($data);
          $data['get_page'] = $this->productmodel->get_page($id);
           $data['slider_json'] = json_encode($data['featureItem']);
        $this->load->view('templates/header');
        $this->load->view('templates/navigation');
       
        $this->load->view('templates/single_page', $data);
         
        $this->load->view('templates/cart');
        $this->load->view('templates/sidebarview',$data);
        $this->load->view('templates/footer');
    }
    public function registeruser()
        {
        
        $data['shiping']=$this->productmodel->getship();
        
     $this->load->view('templates/header');
        $this->load->view('templates/navigation');
        $this->load->view('templates/userRegistrationAndShipping',$data);
        $this->load->view('templates/cartLogin');
        $this->load->view('templates/footer');
}
public function shippingAddress()
        {
     $this->load->view('templates/header');
        $this->load->view('templates/navigation');
        $this->load->view('templates/shipping');
        $this->load->view('templates/footer');
}
public function adduser()
{     $this->load->model('dbmodel');
    $this->load->helper('form');
            $this->load->library(array('form_validation', 'session'));
            $this->form_validation->set_rules('u_name', 'User Name', 'required|xss_clean|max_length[200]');
            $this->form_validation->set_rules('u_fname', 'First Name', 'required|xss_clean|max_length[200]');
            $this->form_validation->set_rules('u_lname', 'Last Name', 'required|xss_clean|max_length[200]');
            $this->form_validation->set_rules('u_email', 'User email', 'required|xss_clean|max_length[200]');
             $this->form_validation->set_rules('u_contact', 'Contact', 'required|xss_clean|max_length[200]');
              $this->form_validation->set_rules('u_address', 'Address', 'required|xss_clean|max_length[200]');
            $this->form_validation->set_rules('u_pass', 'Password', 'required|xss_clean|md5|max_length[200]');
            
            if ($this->form_validation->run() == FALSE) {

                redirect('view/registeruser');
            } else {

                //if valid

                $name = $this->input->post('u_name');
                $fname = $this->input->post('u_fname');
                $lname = $this->input->post('u_lname');
                $email = $this->input->post('u_email');
                $address = $this->input->post('u_address');
                $contact = $this->input->post('u_contact');
                $pass = $this->input->post('u_pass');
                
                $repass = $this->input->post('u_repass');
                $repass = md5($repass);
                $user_type = 1;
                $status = 1;
                if($pass == $repass)
                { 
                $check = $this->dbmodel->check_data($email);
                if ($check > 0) { //if the data exists show error message
                   
                    $this->session->set_flashdata('message', 'User name already exists. Please type new user name.');
                redirect('view/registeruser');
                } else {
                    $this->dbmodel->add_new_user($name, $fname, $lname, $email, $pass, $status, $user_type,$contact,$address);
               
                echo " User registerd <br/> You may contineu shopping ";
                
//$this->session->set_flashdata('message', 'User registerd <br/> You may contineu shopping');
              //  redirect('view/registeruser');               
// redirect('paypal');
                } }
                else {
                     $this->session->set_flashdata('message', 'Password din not matched');
                redirect('view/registeruser');
                }
            }
}

function shipping()
{    $this->load->model('dbmodel');
    $this->load->helper('form');
            $this->load->library(array('form_validation', 'session'));
            $this->form_validation->set_rules('receiver_name', 'User Name', 'required|xss_clean|max_length[200]');
            $this->form_validation->set_rules('receiver_address', 'Address', 'required|xss_clean|max_length[200]');
            $this->form_validation->set_rules('receiver_city', 'City', 'required|xss_clean|max_length[200]');
            $this->form_validation->set_rules('receiver_state', 'State', 'required|xss_clean|max_length[200]');
             $this->form_validation->set_rules('receiver_country', 'Country', 'required|xss_clean|max_length[200]');
              $this->form_validation->set_rules('receiver_zip', 'Zip', 'required|xss_clean|max_length[200]');
            $this->form_validation->set_rules('receiver_email', 'Email', 'required|xss_clean|md5|max_length[200]');
            $this->form_validation->set_rules('Receiver_contact', 'Contact', 'required|xss_clean|max_length[200]');
            if ($this->form_validation->run() == FALSE) {

                redirect('view/shippingAddress');
            } else {
                $name = $this->input->post('receiver_name');
                $address = $this->input->post('receiver_address');
                $city = $this->input->post('receiver_city');
                $state = $this->input->post('receiver_state');
                $country = $this->input->post('receiver_country');
                $zip = $this->input->post('receiver_zip');
                $email = $this->input->post('receiver_email');
                $contact = $this->input->post('Receiver_contact');
                
                $this->dbmodel->order_user($name,$address,$city,$state,$country,$zip,$email,$contact);
                echo " enter to the paypal";
            }
}

}



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */