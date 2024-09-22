<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$this->db->from('user');
		$users = $this->db->get()->result_array();
		$data = array(
			'users'	=> $users
		);
		$this->load->view('layout/_head');
		$this->load->view('layout/_header');
		$this->load->view('layout/_sidebar');
		$this->load->view('admin/usersIndex',$data);
		$this->load->view('layout/_footer');
	}
	public function userAdd(){
		$this->load->view('layout/_head');
		$this->load->view('layout/_header');
		$this->load->view('layout/_sidebar');
		$this->load->view('admin/usersAdd');
		$this->load->view('layout/_footer');
	}
	public function userSave(){
		$data = array(
			'username'	=> $this->input->post('username'),
			'password'	=> md5($this->input->post('password')),
			'fullname'	=> $this->input->post('fullname'),
			'address'	=> $this->input->post('address'),
			'phone'	=> $this->input->post('phone'),
			'level'	=> $this->input->post('level'),
		);
		$this->db->insert('user',$data);
		redirect('admin/users');
	}
	public function userEdit($userID){
		$this->db->from('user')->where('userID',$userID);
		$users = $this->db->get()->row();

		$data = array(
			'users'	=> $users
		);
		$this->load->view('layout/_head');
		$this->load->view('layout/_header');
		$this->load->view('layout/_sidebar');
		$this->load->view('admin/usersEdit',$data);
		$this->load->view('layout/_footer');
	}
	public function userUpdate($userID){
		$data = array(
			'username'	=> $this->input->post('username'),
			'fullName'	=> $this->input->post('fullname'),
			'address'	=> $this->input->post('address'),
			'phone'	=> $this->input->post('phone'),
		);
		$where = array('userID' => $userID);
		$this->db->update('user',$data,$where);
		redirect('admin/users');
	}
	public function userDelete($userID){
		$where = array('userID' => $userID);
		$this->db->delete('user',$where);
		redirect('admin/users');
	}
}
