<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller {
    public function __construct(){
        parent::__construct();
        if($this->session->userdata('level')==NULL){
			redirect('Auth');
		}
    }
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
    public function booksEdit($booksID){
        $this->db->from('books')->where('booksID',$booksID);
        $books = $this->db->get()->row();
        $data = array('books'=>$books);
        $this->load->view('layout/_head');
		$this->load->view('layout/_header');
		$this->load->view('layout/_sidebar');
		$this->load->view('admin/booksEdit',$data);
		$this->load->view('layout/_footer');
    }
    public function booksUpdate($booksID){
        // LOAD LIBRARY UPLOAD
        $this->load->library('upload');
        // PATH COVER
        $config['upload_path'] = './assets/cover';
        // TIPE FILE YANG DIIZINKAN
        $config['allowed_types'] ='*';
        // INISIALISASI CONFIG
        $this->upload->initialize($config);
        // CARI NILAI COVER SEBELUMNYA DARI DATABASE
        $bookCover = $this->db->from('books')->where('booksiD',$booksID)->get()->row();
        $current_cover = $bookCover->cover;
        // KONDISI JIKA ADA COVER YANG DIUPLOAD
        if($this->upload->do_upload('cover')){
            // $COVER MENGAMBIL NILAI GAMBAR YANG BARU DIUPLOAD
            $cover_data = $this->upload->data();
            $cover = $cover_data['file_name']; 
        }else{
            // JIKA TIDAK ADA GAMBAR YANG DIUPLOAD COVER AKAN MENGAMBIL NILAI SEBELUMNYA
            $cover = $current_cover;
        }

        $data = array(
            'title' => $this->input->post('title'),
            'author' => $this->input->post('author'),
            'releaseYear' => $this->input->post('releaseYear'),
            'synopsis' => $this->input->post('synopsis'),
            'status' => $this->input->post('status'),
            'cover' => $cover,
        );
        $where = array('booksID'=>$booksID);
        $this->db->update('books',$data,$where);
        redirect('Admin/books');
    }
}
