<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {

	public function index()
	{
		$this->db->from('books');
		$books = $this->db->get()->result_array();
		$data = array(
			'books'	=> $books
		);
		$this->load->view('layout/_head');
		$this->load->view('layout/_header');
		$this->load->view('layout/_sidebar');
		$this->load->view('admin/booksIndex',$data);
		$this->load->view('layout/_footer');
	}
    public function booksAdd(){
        $this->load->view('layout/_head');
		$this->load->view('layout/_header');
		$this->load->view('layout/_sidebar');
		$this->load->view('admin/booksAdd');
		$this->load->view('layout/_footer');
    }
    public function booksSave(){
        $this->load->library('upload');
        $config['upload_path'] ='./assets/cover';
        $config['allowed_types'] ='*';
        $this->upload->initialize($config);
        if(!$this->upload->do_upload('cover')){
            // $error = array($this->upload->display_errors());
            // print_r($error);
            return;
        }
        else{
            $cover_data = $this->upload->data();
            $cover = $cover_data['file_name']; 
        }

        $data = array(
            'title' => $this->input->post('title'),
            'author' => $this->input->post('author'),
            'releaseYear' => $this->input->post('releaseYear'),
            'synopsis' => $this->input->post('synopsis'),
            'status' => $this->input->post('status'),
            'cover' => $cover,
        );
        $this->db->insert('books',$data);
        redirect('admin/Books');
    }
    public function booksDelete($booksID){
        $where = array('booksID' => $booksID);
        $this->db->delete('books',$where);
        redirect('admin/Books');
    }
}
