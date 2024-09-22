<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function index()
	{
		$this->db->from('categories');
		$categories = $this->db->get()->result_array();
		$data = array(
			'categories'	=> $categories
		);
		$this->load->view('layout/_head');
		$this->load->view('layout/_header');
		$this->load->view('layout/_sidebar');
		$this->load->view('admin/categoriesIndex',$data);
		$this->load->view('layout/_footer');
	}
    public function categoriesAdd(){
        $this->load->view('layout/_head');
		$this->load->view('layout/_header');
		$this->load->view('layout/_sidebar');
		$this->load->view('admin/categoriesAdd');
		$this->load->view('layout/_footer');
    }
    public function categoriesSave(){
        $data = array(
            'categoriesName' => $this->input->post('categoriesName'),
        );
        $this->db->insert('categories',$data);
        redirect('admin/Categories');
    }
    public function categoriesEdit($categoriesID){
        $this->db->from('categories')->where('categoriesID',$categoriesID);
        $categories = $this->db->get()->row();
        $data = array('categories' => $categories);
        $this->load->view('layout/_head');
		$this->load->view('layout/_header');
		$this->load->view('layout/_sidebar');
		$this->load->view('admin/categoriesEdit',$data);
		$this->load->view('layout/_footer');
    }
    public function categoriesUpdate($categoriesID){
        $data = array(
            'categoriesName' => $this->input->post('categoriesName'),
        );
        $where = array('categoriesID' => $categoriesID);
        $this->db->update('categories',$data,$where);
        redirect('admin/categories');
    }
    public function categoriesDelete($categoriesID){
        $where = array('categoriesID' => $categoriesID);
        $this->db->delete('categories',$where);
        redirect('admin/Categories');
    }
}
