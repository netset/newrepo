<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends CI_Controller {

	
	function __construct(){
		parent:: __construct();
		
	}
	
	public function index()
	{
		$data['file']='front/home/main';
		
	
		
		
		//$this->load->view('front/template',$data);
	}
	
	
}
