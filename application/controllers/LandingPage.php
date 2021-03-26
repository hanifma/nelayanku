<?php
defined('BASEPATH') OR exit('No direct script access allowed');

Class LandingPage extends CI_Controller {

	public function index()
	{
		$this->load->view('Landing/Landingpage_view');
	}
}
