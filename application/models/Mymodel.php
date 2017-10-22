<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mymodel extends CI_Model {

	public function Getpegawai($where="" ){
		 $data = $this->db->query('select * from db_pegawai '.$where);
		 return $data->result_array();
	}

	public function Getgaji($where="" ){
		$data = $this->db->query('select * from db_gaji '.$where);
		return $data->result_array();
	}

	
	public function Getdbuser($where="" ){
		$data = $this->db->query('select * from db_user '.$where);
		return $data->result_array();
	}

	public function Getunitkerja($where="" ){
		$data = $this->db->query('select * from db_unit_kerja '.$where);
		return $data->result_array();
	}

	public function Getjabatan($where="" ){
		$data = $this->db->query('select * from db_jabatan '.$where);
		return $data->result_array();
	}

	public function GetAdmin($where="" ){
		$data = $this->db->query('select * from db_admin '.$where);
		return $data->result_array();
	}


	function cek_login($table,$where){		
		return $this->db->get_where($table,$where);
	}

	public function InsertPegawai($tablename,$data){
		$res = $this->db->insert($tablename,$data);
		return $res;
	}

	public function InsertPangkat($tablename,$data){
		$res = $this->db->insert($tablename,$data);
		return $res;
	}

	public function InsertUnitKerja($tablename,$data){
		$res = $this->db->insert($tablename,$data);
		return $res;
	}


	public function DeleteData($tablename,$where){
		$res = $this->db->delete($tablename,$where);
		return $res;
	}

	public function UpdatePegawai($tablename,$data,$where){
		$res = $this->db->update($tablename,$data,$where);
		return $res;
	}

	public function UpdateUnitKerja($tablename,$data,$where){
		$res = $this->db->update($tablename,$data,$where);
		return $res;
	}


	public function UpdateGaji($tablename,$data,$where){
		$res = $this->db->update($tablename,$data,$where);
		return $res;
	}


}






/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */