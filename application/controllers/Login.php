<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
	public function index()
	{
		$data = array ('tittle'=> 'Login Admin');
		
		$this->load->view('login/list', $data, FALSE);
		
	}
}
