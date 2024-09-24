<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function index()
	{
        $this->load->view('login');
	}
	public function login(){
		$username = $this->input->post('username');
		// password jangan lupa di enkripsi
		$password = md5($this->input->post('password'));
		// ambil data dari database berdasarkan USERNAME
		$this->db->from('user')->where('username',$username);
		$query = $this->db->get()->row();
		// KONDIS PERTAMA FORM NULL / KOSONG
		if($query == NULL){
			echo "<script>alert('username salah');</scipt>";
			redirect('Auth');
		}elseif($query->password == $password){
			$data = array(
				'userID'=> $query->userID,
				'username'=>$query->username,
				'fullName'=>$query->fullName,
				'address'=>$query->address,
				'phone'=>$query->phone,
				'level'=>$query->level,
			);
			$this->session->set_userdata($data);
			redirect('Admin/Dashboard');
		}else{
			echo '<script>alert("password salah")</scipt>';
			redirect('Auth');
		}
	}
	public function register(){
		$this->load->view('register');
	}
}
