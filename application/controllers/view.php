<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class View extends CI_Controller {

	 function __construct()
 {
   parent::__construct();  
     //   $this->load->library('session');
       // $this->load->model('dbmodel');
        $this->load->helper('url');
      //  $this->load->helper('date');
        $this->load->helper(array('form', 'url', 'date'));
      //  $this->load->library("pagination");
      
 }
 
 
	public function index()
	{
		$this->load->view('templates/header');
                $this->load->view('templates/navigation');
                $this->load->view('templates/content');
                $this->load->view('templates/footer');
                
	}
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */