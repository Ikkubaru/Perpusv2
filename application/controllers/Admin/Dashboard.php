<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
    public function __construct(){
        parent::__construct();
        // ififjalfja
    }
	public function index()
	{
		$this->load->view('layout/_head');
		$this->load->view('layout/_header');
		$this->load->view('layout/_sidebar');
		$this->load->view('dashboard');
		$this->load->view('layout/_footer');
	}
}
