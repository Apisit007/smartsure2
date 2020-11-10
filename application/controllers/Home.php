<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
		{
			parent::__construct();
		}

	public function index(){
		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template = array(
			   'title' => 'Home | Smart Sure',
			   'content' => 'Home'
			   
          );

		// $template['content'] = $this->load->view('home',$contents,TRUE);
		$this->load->view('template',$template);
	
	}

	public function view($id=null){

		$contents['cart_session'] = $this->session->userdata('cart_session');
		$template=array(
		 'title'   => 'News Show | Smart Sure',
		 'content' => 'Package_show',
		 'id' => $id
		 );
	   
		$contents['id'] = $id;
		$this->load->view('template',$template);
		}
	
}
