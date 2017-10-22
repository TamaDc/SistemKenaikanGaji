<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	function __construct(){
		parent::__construct();		
		$this->load->model('Mymodel');
	}

	public function index()
	{
		if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}else{

		$this->load->view('index_user');
		}
	}

	public function profil($NIP = NULL)
	{
		if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}else{
		$data['NIP'] = $NIP;
		$data['db_pegawai'] = $this->Mymodel->Getpegawai("where NIP = '$NIP' ");
		$data['db_gaji'] = $this->Mymodel->Getgaji("where NIP = '$NIP' ");
		$this->load->view('form_profile_user',$data);
		}
	}


	public function edit($NIP = NULL){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_pegawai'] = $this->Mymodel->Getpegawai("where NIP = '$NIP' ");
			$data['db_gaji'] = $this->Mymodel->Getgaji("where NIP = '$NIP' ");
			$this->load->view('form_edit_pegawai_user',$data);
			}
		}

	public function update_pegawai_user(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$NIP = $_POST['NIP'];
			$nama = $_POST['nama'];
			$status = $_POST['status'];
			$golongan = $_POST['golongan'];
			$pendidikan = $_POST['pendidikan'];
			$jabatan = $_POST['jabatan'];
			
			$data_update = array(
				'NIP' => $NIP,
				'nama' => $nama,
				'status' => $status,
				'golongan' => $golongan,
				'pendidikan' => $pendidikan,
				'jabatan' => $jabatan,
				
			);
			$where = array('NIP' => $NIP);
			$res = $this->Mymodel->UpdatePegawai('db_pegawai',$data_update,$where);
			if($res >=1){
				redirect('user/profil/'.$NIP);
			}
			else{
				echo "gagal";
			}
			}
		}

		public function update_gaji_user(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$NIP = $_POST['NIP'];
			$tmt_cpns = $_POST['tmt_cpns'];
			$golongan = $_POST['golongan'];
			$tmt_pangkat = $_POST['tmt_pangkat'];
			$jabatan = $_POST['jabatan'];
			$tmt_kgb = $_POST['tmt_kgb'];
			$grade = $_POST['grade'];
			$gaji = $_POST['gaji'];
			
			$data_update = array(
				'NIP' => $NIP,
				'tmt_cpns' => $tmt_cpns,
				'golongan' => $golongan,
				'tmt_pangkat' => $tmt_pangkat,
				'jabatan' => $jabatan,
				'tmt_kgb' => $tmt_kgb,
				'grade' => $grade,
				'gaji' => $gaji,
				
			);
			$where = array('NIP' => $NIP);
			$res = $this->Mymodel->UpdatePegawai('db_gaji',$data_update,$where);
			if($res >=1){
				redirect('user/profil/'.$NIP);
			}
			else{
				echo "gagal";
			}
			}
		}

	public function widgets()
	{
		if($this->session->userdata('status') != "login"){
			$this->load->view('form_login');
		}else{
		$this->load->view('widgets_user');
		}
	}


}
