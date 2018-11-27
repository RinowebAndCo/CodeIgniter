<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$data = array('title' => 'Bienvenue');
		$page = $this->load->view('welcome_message', $data, true);
		$this->load->view('template', array('page' => $page));
	}

	public function signin()
	{
	$this->load->view('sign_in');
	}
}
