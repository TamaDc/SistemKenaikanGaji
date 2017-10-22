<?php 

class Login extends CI_Controller{

	function __construct(){
		parent::__construct();		
		$this->load->model('Mymodel');

	}

	function index(){
		$this->load->view('form_login');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->Mymodel->cek_login("db_admin",$where)->num_rows();
		$user = $this->Mymodel->cek_login("db_user",$where)->num_rows();
		if($cek > 0){

			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);

			$this->session->set_userdata($data_session);
			$com = array(
			'index' => $this->load->view('index',array(),true),
			);
			$this->load->view('index',$com);

		}
		else if ($user > 0){

			$data_session = array(
				'nama' => $username,
				
				'status' => "login"
				);

			$this->session->set_userdata($data_session);
			$NIP = $this->input->post('username');
			$data['NIP'] = $NIP;

			$com = array(
			'index' => $this->load->view('index',array(),true),
			);

			redirect('user/profil/'.$NIP);
					
		}
		else{
			
			$this->load->view('form_login');
			
		}
	}

	function logout(){
		$this->session->sess_destroy();
		$this->load->view('form_login');
	}
}