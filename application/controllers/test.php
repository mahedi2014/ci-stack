<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller
{
    public function __construct() {
        parent::__construct();   	 
		//$this->lang->load("message","english");		
    }

    function index() {
        $data["welcome_message"] = $this->lang->line("welcome_message");
        $this->load->view('test', $data);
    }
	
}