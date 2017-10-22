	<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Admin extends CI_Controller {

		function __construct(){
			parent::__construct();		
			$this->load->model('Mymodel');
		}

		public function index()
		{
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$this->load->view('index');
			}
		}

		public function pegawai(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_pegawai'] = $this->Mymodel->Getpegawai();
			$this->load->view('form_data_pegawai',$data);	
			}
		}

		public function form_input_admin(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$this->load->view('form_input_admin');	
			}
		}

		public function form_input_user(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$this->load->view('form_input_user');	
			}
		}



		public function admin(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_admin'] = $this->Mymodel->GetAdmin();
			$this->load->view('form_data_admin',$data);	
			}
		}

		public function user(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_user'] = $this->Mymodel->Getdbuser();
			$this->load->view('form_data_user',$data);	
			}
		}
		



		public function unit_kerja(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_unit_kerja'] = $this->Mymodel->Getunitkerja();
			$this->load->view('form_unit_kerja',$data);	
			}
		}

		public function jabatan(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_jabatan'] = $this->Mymodel->Getjabatan();
			$this->load->view('form_jabatan',$data);	
			}
		}

		public function form_input_jabatan(){
			$this->load->view('form_input_jabatan');
		}

		public function form_input_unit_kerja(){
			$this->load->view('form_input_unit_kerja');
		}



		public function widgets(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$this->load->view('widgets');
			}	
		}


		public function form_input_pegawai(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$this->load->view('form_input_pegawai');
			}
		}

		public function insert_pegawai(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$NIP = $_POST['NIP'];
			$nama = $_POST['nama'];
			$status = $_POST['status'];
			$golongan = $_POST['golongan'];
			$periode = $_POST['periode'];
			$pendidikan = $_POST['pendidikan'];
			$jabatan = $_POST['jabatan'];
			$unit_kerja = $_POST['unit_kerja'];
			$masa_kerja_bulan = $_POST['masa_kerja_bulan'];
			$masa_kerja_tahun = $_POST['masa_kerja_tahun'];
			$data_insert = array(
				'NIP' => $NIP,
				'nama' => $nama,
				'status' => $status,
				'golongan' => $golongan,
				'periode' => $periode,
				'pendidikan' => $pendidikan,
				'jabatan' => $jabatan,
				'unit_kerja' => $unit_kerja,
				'masa_kerja_bulan' => $masa_kerja_bulan,
				'masa_kerja_tahun' => $masa_kerja_tahun,
				
			);
			$tmt_cpns = $_POST['tmt_cpns'];
			$tmt_pangkat = $_POST['tmt_pangkat'];
			$tmt_kgb = $_POST['tmt_kgb'];
			$grade = $_POST['grade'];
			$gaji = $_POST['gaji'];
			
			$data_insert2 = array(
				'NIP' => $NIP,
				'nama' => $nama,
				'tmt_cpns' => $tmt_cpns,
				'golongan' => $golongan,
				'periode' => $periode,
				'tmt_pangkat' => $tmt_pangkat,
				'jabatan' => $jabatan,
				'tmt_kgb' => $tmt_kgb,
				'grade' => $grade,
				'gaji' => $gaji,
				'masa_kerja_bulan' => $masa_kerja_bulan,
				'masa_kerja_tahun' => $masa_kerja_tahun,
				
			);
			$res = $this->Mymodel->InsertPegawai('db_pegawai',$data_insert);
			$res2 = $this->Mymodel->InsertPangkat('db_gaji',$data_insert2);
			if($res >=1 && $res2 >=1){
				redirect('admin/pegawai');
			}
			else{
				echo "Im sorry !!!";
			}
			}
		}

		public function insert_pangkat(){
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
			
			$data_insert = array(
				'NIP' => $NIP,
				'tmt_cpns' => $tmt_cpns,
				'golongan' => $golongan,
				'tmt_pangkat' => $tmt_pangkat,
				'jabatan' => $jabatan,
				'tmt_kgb' => $tmt_kgb,
				'grade' => $grade,
				'gaji' => $gaji,
				
			);
			$res = $this->Mymodel->InsertPangkat('db_gaji',$data_insert);
			if($res >=1){
				redirect('admin/pegawai');
			}
			else{
				echo "Im sorry !!!";
			}
			}
		}

		public function insert_unit_kerja(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$id_unit_kerja = $_POST['id_unit_kerja'];
			$nama_unit_kerja = $_POST['nama_unit_kerja'];
			$eselon = $_POST['eselon'];
			
			$data_insert = array(
				'id_unit_kerja' => $id_unit_kerja,
				'nama_unit_kerja' => $nama_unit_kerja,
				'eselon' => $eselon,
				
			);
			$res = $this->Mymodel->InsertUnitKerja('db_unit_kerja',$data_insert);
			if($res >=1){
				redirect('admin/unit_kerja');
			}
			else{
				echo "Im sorry !!!";
			}
			}
		}

		public function insert_jabatan(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			
			$jabatan = $_POST['jabatan'];
			$level = $_POST['level'];
			
			$data_insert = array(
				
				'jabatan' => $jabatan,
				'level' => $level,
				
			);
			$res = $this->Mymodel->InsertUnitKerja('db_jabatan',$data_insert);
			if($res >=1){
				redirect('admin/jabatan');
			}
			else{
				echo "Im sorry !!!";
			}
			}
		}

		public function insert_admin(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$data_insert = array(
				
				'username' => $username,
				'password' => md5($password),
				
			);
			$res = $this->Mymodel->InsertUnitKerja('db_admin',$data_insert);
			if($res >=1){
				redirect('admin/admin');
			}
			else{
				echo "Im sorry !!!";
			}
			}
		}

		public function insert_user(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$data_insert = array(
				
				'username' => $username,
				'password' => md5($password),
				
			);
			$res = $this->Mymodel->InsertUnitKerja('db_user',$data_insert);
			if($res >=1){
				redirect('admin/user');
			}
			else{
				echo "Im sorry !!!";
			}
			}
		}


		public function delete($NIP){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$where = array('NIP' => $NIP);
			$res = $this->Mymodel->DeleteData('db_pegawai',$where);
			$res1 = $this->Mymodel->DeleteData('db_gaji',$where);
			if(($res>=1) && ($res1>=1)){
				redirect('admin/pegawai');
			}
			else{
				echo "Data Gagal diHapus!!!";
			}
			}

		}

		public function delete_admin($id){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$where = array('id' => $id);
			$res = $this->Mymodel->DeleteData('db_admin',$where);
			if($res>=1){
				redirect('admin/admin');
			}
			else{
				echo "Data Gagal diHapus!!!";
			}
			}

		}

		public function delete_user($id){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$where = array('id' => $id);
			$res = $this->Mymodel->DeleteData('db_user',$where);
			if($res>=1){
				redirect('admin/user');
			}
			else{
				echo "Data Gagal diHapus!!!";
			}
			}

		}

		public function deleteunitkerja($id_unit_kerja){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$where = array('id_unit_kerja' => $id_unit_kerja);
			$res = $this->Mymodel->DeleteData('db_unit_kerja',$where);
			if(($res>=1)){
				redirect('admin/unit_kerja');
			}
			else{
				echo "Data Gagal diHapus!!!";
			}
			}

		}

		public function deletejabatan($id_jabatan){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$where = array('id_jabatan' => $id_jabatan);
			$res = $this->Mymodel->DeleteData('db_jabatan',$where);
			if(($res>=1)){
				redirect('admin/jabatan');
			}
			else{
				echo "Data Gagal diHapus!!!";
			}
			}

		}

		public function edit($NIP = NULL){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_pegawai'] = $this->Mymodel->Getpegawai("where NIP = '$NIP' ");
			$data['db_gaji'] = $this->Mymodel->Getgaji("where NIP = '$NIP' ");
			$this->load->view('form_edit_pegawai',$data);
			}
		}

		public function edit_admin($id = NULL){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_admin'] = $this->Mymodel->GetAdmin("where id = '$id' ");
			$this->load->view('form_edit_admin',$data);
			}
		}

		public function edit_user($id = NULL){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_user'] = $this->Mymodel->Getdbuser("where id = '$id' ");
			$this->load->view('form_edit_user',$data);
			}
		}

		public function editunitkerja($id_unit_kerja){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_unit_kerja'] = $this->Mymodel->Getunitkerja("where id_unit_kerja = '$id_unit_kerja' ");
			$this->load->view('form_edit_unit_kerja',$data);
			}
		}

		public function editjabatan($id_jabatan){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_jabatan'] = $this->Mymodel->Getjabatan("where id_jabatan = '$id_jabatan' ");
			$this->load->view('form_edit_jabatan',$data);
			}
		}


		public function update_pegawai(){
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
				redirect('admin/pegawai');
			}
			else{
				echo "gagal";
			}
			}
		}

		public function update_gaji(){
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
				redirect('admin/pegawai');
			}
			else{
				echo "gagal";
			}
			}
		}

		public function update_unit_kerja(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$id_unit_kerja = $_POST['id_unit_kerja'];
			$nama_unit_kerja = $_POST['nama_unit_kerja'];
			$eselon = $_POST['eselon'];
			
			$data_update = array(
				'id_unit_kerja' => $id_unit_kerja,
				'nama_unit_kerja' => $nama_unit_kerja,
				'eselon' => $eselon,
				
			);
			$where = array('id_unit_kerja' => $id_unit_kerja);
			$res = $this->Mymodel->UpdateUnitKerja('db_unit_kerja',$data_update,$where);
			if($res >=1){
				redirect('admin/unit_kerja');
			}
			else{
				echo "gagal";
			}
			}
		}

		public function update_jabatan(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$id_jabatan = $_POST['id_jabatan'];
			$jabatan = $_POST['jabatan'];
			$level = $_POST['level'];
			
			$data_update = array(
				'id_jabatan' => $id_jabatan,
				'jabatan' => $jabatan,
				'level' => $level,
				
			);
			$where = array('id_jabatan' => $id_jabatan);
			$res = $this->Mymodel->UpdateUnitKerja('db_jabatan',$data_update,$where);
			if($res >=1){
				redirect('admin/jabatan');
			}
			else{
				echo "gagal";
			}
			}
		}

		public function update_admin(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$id = $_POST['id'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$data_update = array(
				'id' => $id,
				'username' => $username,
				'password' => md5($password),
				
			);
			$where = array('id' => $id);
			$res = $this->Mymodel->UpdateUnitKerja('db_admin',$data_update,$where);
			if($res >=1){
				redirect('admin/admin');
			}
			else{
				echo "gagal";
			}
			}
		}

		public function update_user(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$id = $_POST['id'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$data_update = array(
				'id' => $id,
				'username' => $username,
				'password' => md5($password),
				
			);
			$where = array('id' => $id);
			$res = $this->Mymodel->UpdateUnitKerja('db_user',$data_update,$where);
			if($res >=1){
				redirect('admin/user');
			}
			else{
				echo "gagal";
			}
			}
		}


		public function show_profile($NIP = NULL){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			//$where = $this->session->userdata('NIP');
			$data['db_pegawai'] = $this->Mymodel->Getpegawai("where NIP = '$NIP' ");
			$data['db_gaji'] = $this->Mymodel->Getgaji("where NIP = '$NIP' ");
			$this->load->view('form_profile',$data);
			}
		}

		public function LaporanPegawai(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_pegawai'] = $this->Mymodel->Getpegawai();
			$this->load->view('form_laporan_pegawai',$data);	
			}
		}

		public function LaporanJabatan(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_jabatan'] = $this->Mymodel->Getjabatan();
			$this->load->view('form_laporan_jabatan',$data);	
			}
		}

		public function LaporanUnitKerja(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_unit_kerja'] = $this->Mymodel->Getunitkerja();
			$this->load->view('form_laporan_unit_kerja',$data);	
			}
		}

		public function print_table(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}
			else{
			$data['db_pegawai'] = $this->Mymodel->Getpegawai();
			$this->load->view('form_print_pegawai',$data);

			$html = $this->output->get_output();
			
			// Load/panggil library dompdfnya
			$this->load->library('dompdf_gen');
			
			// Convert to PDF
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			//utk menampilkan preview pdf
			$this->dompdf->stream("welcome.pdf",array('Attachment'=>0));
			//atau jika tidak ingin menampilkan (tanpa) preview di halaman browser
			//$this->dompdf->stream("welcome.pdf");

			}
		}

		public function print_jabatan(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}
			else{
			$data['db_jabatan'] = $this->Mymodel->Getjabatan();
			$this->load->view('form_print_jabatan',$data);

			$html = $this->output->get_output();
			
			// Load/panggil library dompdfnya
			$this->load->library('dompdf_gen');
			
			// Convert to PDF
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			//utk menampilkan preview pdf
			$this->dompdf->stream("welcome.pdf",array('Attachment'=>0));
			//atau jika tidak ingin menampilkan (tanpa) preview di halaman browser
			//$this->dompdf->stream("welcome.pdf");

			}
		}

		public function print_unit_kerja(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}
			else{
			$data['db_unit_kerja'] = $this->Mymodel->Getunitkerja();
			$this->load->view('form_print_unit_kerja',$data);

			$html = $this->output->get_output();
			
			// Load/panggil library dompdfnya
			$this->load->library('dompdf_gen');
			
			// Convert to PDF
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			//utk menampilkan preview pdf
			$this->dompdf->stream("welcome.pdf",array('Attachment'=>0));
			//atau jika tidak ingin menampilkan (tanpa) preview di halaman browser
			//$this->dompdf->stream("welcome.pdf");

			}
		}

		public function print_profile($NIP = NULL){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}
			else{
			$data['db_pegawai'] = $this->Mymodel->Getpegawai("where NIP = '$NIP' ");
			$data['db_gaji'] = $this->Mymodel->Getgaji("where NIP = '$NIP' ");
			$this->load->view('form_print_profile',$data);

			$html = $this->output->get_output();
			
			// Load/panggil library dompdfnya
			$this->load->library('dompdf_gen');
			
			// Convert to PDF
			$this->dompdf->load_html($html);
			$this->dompdf->render();
			//utk menampilkan preview pdf
			$this->dompdf->stream("welcome.pdf",array('Attachment'=>0));
			//atau jika tidak ingin menampilkan (tanpa) preview di halaman browser
			//$this->dompdf->stream("welcome.pdf");

			}
		}

		public function update_KGB($NIP = NULL){
			$NIP = $_POST['NIP'];
			$golongan = $_POST['golongan'];
			$periode = $_POST['periode'];
			$tmt_kgb = $_POST['tmt_kgb'];
			$masa_kerja_tahun = $_POST['masa_kerja_tahun'];
			$masa_kerja_bulan = $_POST['masa_kerja_bulan'];

		if($golongan == 'I'){
			if($periode == 'A'){
				if($masa_kerja_tahun == 0){
					$gaji = 1486500;
				}
				elseif ($masa_kerja_tahun == 2) {
					$gaji = 1533400;	
				}
				elseif ($masa_kerja_tahun == 4) {
					$gaji = 1581700;
				}
				elseif ($masa_kerja_tahun == 6) {
					$gaji = 1631500;
				}
				elseif ($masa_kerja_tahun == 8) {
					$gaji = 1682900;
				}
			}
			elseif($periode == 'B'){
				if($masa_kerja_tahun == 3){
					$gaji = 1623400;
				}
				elseif ($masa_kerja_tahun == 5) {
					$gaji = 1674500;
				}
				elseif ($masa_kerja_tahun == 7) {
					$gaji = 1727300;
				}
				elseif ($masa_kerja_tahun == 9) {
					$gaji = 1781700;
				}
			}
			elseif($periode == 'C'){
				if($masa_kerja_tahun == 3){
					$gaji = 1692100;
				}
				elseif ($masa_kerja_tahun == 5) {
					$gaji = 1745400;
				}
				elseif ($masa_kerja_tahun == 7) {
					$gaji = 1800300;
				}
				elseif ($masa_kerja_tahun == 9) {
					$gaji = 1857000;
				}
			}
			elseif($periode == 'D'){
				if($masa_kerja_tahun == 3){
					$gaji = 1763600;
				}
				elseif ($masa_kerja_tahun == 5) {
					$gaji = 1819200;
				}
				elseif ($masa_kerja_tahun == 7) {
					$gaji = 1876500;
				}
				elseif ($masa_kerja_tahun == 9) {
					$gaji = 1935600;
				}
			}
		}
		elseif($golongan == 'II'){
			if($periode == 'A'){
				if($masa_kerja_tahun == 0){
					$gaji = 1926000;
				}
				elseif ($masa_kerja_tahun == 1) {
					$gaji = 1956300;	
				}
				elseif ($masa_kerja_tahun == 3) {
					$gaji = 2017900;
				}
				elseif ($masa_kerja_tahun == 7) {
					$gaji = 2081500;
				}
			}
			elseif($periode == 'B'){
				if($masa_kerja_tahun == 3){
					$gaji = 2103300;
				}
				elseif ($masa_kerja_tahun == 5) {
					$gaji = 2169500;
				}
				elseif ($masa_kerja_tahun == 7) {
					$gaji = 2237900;
				}
				elseif ($masa_kerja_tahun == 9) {
					$gaji = 2308300;
				}
			}
			elseif($periode == 'C'){
				if($masa_kerja_tahun == 3){
					$gaji = 2192300;
				}
				elseif ($masa_kerja_tahun == 5) {
					$gaji = 2261300;
				}
				elseif ($masa_kerja_tahun == 7) {
					$gaji = 2332500;
				}
				elseif ($masa_kerja_tahun == 9) {
					$gaji = 2406000;
				}
			}
			elseif($periode == 'D'){
				if($masa_kerja_tahun == 3){
					$gaji = 2285000;
				}
				elseif ($masa_kerja_tahun == 5) {
					$gaji = 2357000;
				}
				elseif ($masa_kerja_tahun == 7) {
					$gaji = 2431200;
				}
				elseif ($masa_kerja_tahun == 9) {
					$gaji = 2507800;
				}
			}
		}
		elseif($golongan == 'III'){
			if($periode == 'A'){
				if($masa_kerja_tahun == 0){
					$gaji = 1486500;
				}
				elseif ($masa_kerja_tahun == 2) {
					$gaji = 1533400;	
				}
				elseif ($masa_kerja_tahun == 4) {
					$gaji = 1581700;
				}
				elseif ($masa_kerja_tahun == 6) {
					$gaji = 1631500;
				}
				elseif ($masa_kerja_tahun == 8) {
					$gaji = 1682900;
				}
			}
		}

		elseif($golongan == 'III'){
			if($periode == 'A'){
				if($masa_kerja_tahun == 0){
					$gaji = 2456700;
				}
				elseif ($masa_kerja_tahun == 2) {
					$gaji = 2534000;	
				}
				elseif ($masa_kerja_tahun == 4) {
					$gaji = 2613800;
				}
				elseif ($masa_kerja_tahun == 6) {
					$gaji = 2696200;
				}
			}
			elseif($periode == 'B'){
				if($masa_kerja_tahun == 0){
					$gaji = 2560600;
				}
				elseif ($masa_kerja_tahun == 2) {
					$gaji = 2641200;
				}
				elseif ($masa_kerja_tahun == 4) {
					$gaji = 2724400;
				}
				elseif ($masa_kerja_tahun == 6) {
					$gaji = 2810200;
				}
			}
			elseif($periode == 'C'){
				if($masa_kerja_tahun == 0){
					$gaji = 2668900;
				}
				elseif ($masa_kerja_tahun == 2) {
					$gaji = 2752900;
				}
				elseif ($masa_kerja_tahun == 4) {
					$gaji = 2839700;
				}
				elseif ($masa_kerja_tahun == 6) {
					$gaji = 2929100;
				}
			}
			elseif($periode == 'D'){
				if($masa_kerja_tahun == 0){
					$gaji = 2781800;
				}
				elseif ($masa_kerja_tahun == 2) {
					$gaji = 2869400;
				}
				elseif ($masa_kerja_tahun == 4) {
					$gaji = 2959800;
				}
				elseif ($masa_kerja_tahun == 6) {
					$gaji = 3053000;
				}
			}
		}
		elseif($golongan == 'IV'){
			if($periode == 'A'){
				if($masa_kerja_tahun == 0){
					$gaji = 2899500;
				}
				elseif ($masa_kerja_tahun == 2) {
					$gaji = 2990800;	
				}
				elseif ($masa_kerja_tahun == 4) {
					$gaji = 3085000;
				}
				elseif ($masa_kerja_tahun == 6) {
					$gaji = 3182100;
				}
			}
			elseif($periode == 'B'){
				if($masa_kerja_tahun == 0){
					$gaji = 3022100;
				}
				elseif ($masa_kerja_tahun == 2) {
					$gaji = 3117300;
				}
				elseif ($masa_kerja_tahun == 4) {
					$gaji = 3215500;
				}
				elseif ($masa_kerja_tahun == 6) {
					$gaji = 3316700;
				}
			}
			elseif($periode == 'C'){
				if($masa_kerja_tahun == 0){
					$gaji = 3149900;
				}
				elseif ($masa_kerja_tahun == 2) {
					$gaji = 3249100;
				}
				elseif ($masa_kerja_tahun == 4) {
					$gaji = 3351500;
				}
				elseif ($masa_kerja_tahun == 6) {
					$gaji = 3457000;
				}
			}
			elseif($periode == 'D'){
				if($masa_kerja_tahun == 0){
					$gaji = 3283200;
				}
				elseif ($masa_kerja_tahun == 2) {
					$gaji = 3386600;
				}
				elseif ($masa_kerja_tahun == 4) {
					$gaji = 3493200;
				}
				elseif ($masa_kerja_tahun == 6) {
					$gaji = 3603300;
				}
			}
		}
		
		$insert_pegawai = array(
				'NIP' => $NIP,
				'golongan' => $golongan,
				'periode' => $periode,	
				'masa_kerja_tahun' => $masa_kerja_tahun,
				'masa_kerja_bulan' => $masa_kerja_bulan,
			);	
		$insert_gaji = array(
				'NIP' => $NIP,
				'golongan' => $golongan,
				'periode' => $periode,
				'tmt_kgb' => $tmt_kgb,
				'gaji' => $gaji,
				'masa_kerja_tahun' => $masa_kerja_tahun,
				'masa_kerja_bulan' => $masa_kerja_bulan,
			);	
			
			$where = array('NIP' => $NIP);
			$res = $this->Mymodel->UpdatePegawai('db_gaji',$insert_gaji,$where);
			$res2 = $this->Mymodel->UpdatePegawai('db_pegawai',$insert_pegawai,$where);
			if($res >=1 && $res2 >=1){
				redirect('admin/data_KGB');
			}
			else{
				echo "Im sorry !!!";
			}
			
		
			
		}

		public function KGB($NIP = NULL){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_pegawai'] = $this->Mymodel->Getpegawai("where NIP = '$NIP' ");
			$data['db_gaji'] = $this->Mymodel->Getgaji("where NIP = '$NIP' ");
			$this->load->view('form_input_kenaikan',$data);
			}
		}

		public function data_KGB(){
			if($this->session->userdata('status') != "login"){
				$this->load->view('form_login');
			}else{
			$data['db_pegawai'] = $this->Mymodel->Getpegawai();
			$data['db_gaji'] = $this->Mymodel->Getgaji();
			$this->load->view('form_data_KGB',$data);	
			}

		}


		public function icons(){
			$this->load->view('icons');
		}

		public function login(){
			$this->load->view('form_login');
		}

		public function panels(){
			$this->load->view('panels');
		}

		public function profile(){
			$this->load->view('form_profile');
		}

	}
