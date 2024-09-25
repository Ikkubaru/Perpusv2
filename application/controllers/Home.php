<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->db->from('books');
		$books = $this->db->get()->result_array();
		$this->db->from('categories');
		$categories = $this->db->get()->result_array();
		$data = array('books'=>$books,'categories' => $categories);
        $this->load->view('homepage',$data);
	}
	public function booksDetails($booksID){
		$details = $this->db->from('books')->where('booksID',$booksID)->get()->row();
		$data = array('details'=>$details);
		$this->load->view('booksDetail',$data);
	}
	public function borrow($booksID){
		
	}
}
