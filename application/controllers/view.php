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
            if(isset($id)){
            $data['product'] = $this->productmodel->getProductById($id);
           
            $this->load->view('templates/header');
                $this->load->view('templates/navigation');
                $this->load->view('templates/details', $data);
                $this->load->view('templates/cart');
                $this->load->view('templates/sidebarview');
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
       //   $data['category'] = $this->productmodel->category_list_id();
          //var_dump($data);
          $data['get_page'] = $this->productmodel->get_page($id);
           $data['slider_json'] = json_encode($data['featureItem']);
        $this->load->view('templates/header');
        $this->load->view('templates/navigation');
       
        $this->load->view('templates/contactUs', $data);
         
        $this->load->view('templates/cart');
        $this->load->view('templates/sidebarview',$data);
        $this->load->view('templates/footer');
    }
    public function registeruser()
        {
     $this->load->view('templates/header');
        $this->load->view('templates/navigation');
        $this->load->view('templates/userRegistration');
        $this->load->view('templates/footer');
}
}



/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */