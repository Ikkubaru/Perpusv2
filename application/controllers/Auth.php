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
			// DIREDIRECT JIKA USERNAME SALAH
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
			if($this->session->userdata('level')=='admin'){
				redirect('Admin/Dashboard');
			}elseif($this->session->userdata('level')=='petugas'){
				redirect('Admin/Dashboard');
			}else{
				redirect('Home');
			}
		}else{
			echo '<script>alert("password salah")</scipt>';
			// DIREDIRECT JIKA USERNAME / PASSWORD SALAH
			redirect('Auth');
		}
	}
	public function logout(){
		$this->session->sess_destroy();
        redirect('home');
	}
	public function register(){
		$this->load->view('register');
	}
}
