<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Sistem Informasi</title>

<link href="<?php echo base_url()."assets/css/"; ?>bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url()."assets/css/"; ?>datepicker3.css" rel="stylesheet">
<link href="<?php echo base_url()."assets/css/"; ?>styles.css" rel="stylesheet">

<!--Icons-->
<script src="<?php echo base_url()."assets/js/"; ?>lumino.glyphs.js"></script>

<!--[if lt IE 9]>
<script src="js/html5shiv.js"></script>
<script src="js/respond.min.js"></script>
<![endif]-->

</head>

<body>
	 
   <?php foreach ($db_pegawai as $data) {
      # code...
    } ?>  

    <?php foreach ($db_gaji as $data2) {
      # code...
    } ?>  



	<?php $this->load->view('nav.php'); ?>
	
		
	<?php $this->load->view('sidebar_user.php'); ?>
		
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Pegawai / Edit</li>
			</ol>
		</div><!--/.row-->
		
		
				
		
		<div class="row">
			<div class="col-lg-12">
				<h2>Alerts</h2>
				
			</div>
		</div><!--/.row-->		

			
		<div class="row">
			<div class="col-lg-12">
				<h2>Tab Panels</h2>
			</div>
			
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body tabs">
						

						<ul class="nav nav-tabs">
							<li class="active"><a href="#tab1" data-toggle="tab">Data Pegawai</a></li>
							<li><a href="#tab2" data-toggle="tab">Data Pangkat</a></li>
							
						</ul>
		
						<div class="tab-content">
							<div class="tab-pane fade in active" id="tab1">
									<table border="0" style="width: 978px"; align="center">

                          <div align="center">
                            <form class="form-horizontal" role="form" method="POST" action="<?php echo base_url()."index.php/user/update_pegawai_user/".$data['NIP']; ?>">
                                <tr>  
                                  <th width="150">
                                  <div class="form-group">
                                    <label  for="NIP" class="col-sm-2 control-label">NIP</label>
                                  </th>
                                  <th width="750">
                                    <div class="col-sm-10">
                                      <input type="text" autocomplete="off" required="required" class="form-control" id="NIP" name="NIP" placeholder="196808121997022001" value="<?php echo $data['NIP']; ?>">
                                    </div>
                                  </div>
                                  </th>
                                </tr>

                                <tr>
                                  <td>  
                                      <div class="form-group">
                                      <label for="nama" class="col-sm-2 control-label">nama</label>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="col-sm-10">
                                      <input type="text" class="form-control" id="nama" required="required" name="nama" placeholder="Rifqi Yunus" value="<?php echo $data['nama']; ?>">
                                      </div>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td>  
                                      <div class="form-group">
                                      <label for="status" class="col-sm-2 control-label">Status</label>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="col-sm-10">
                                      <input type="text" class="form-control" id="status" required="required" name="status" placeholder="PNS" value="<?php echo $data['status']; ?>">
                                      </div>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td>  
                                      <div class="form-group">
                                      <label for="golongan" class="col-sm-2 control-label">Golongan</label>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="col-sm-10">
                                      <input type="text" class="form-control" id="golongan" required="required" name="golongan" placeholder="PNS" value="<?php echo $data['golongan']; ?>">
                                      </div>
                                  </td>
                                  </tr>

                                  <tr>
                                  <td>
                                      <div class="form-group">
                                      <label for="skpdt" class="col-sm-2 control-label">Pendidikan</label>
                                      </div>
                                  </td>
                                  <td>
                                    <div class="col-sm-10">
                                      <input type="text" required="required"  class="form-control" id="pendidikan" name="pendidikan" placeholder="Pendidikan" value="<?php echo $data['pendidikan']; ?>">
                                    </div>
                                  </td>
                                  </tr>
                                  
                                  <tr><td>
                                      <div class="form-group">
                                      <label for="pangkat" class="col-sm-2 control-label">Pangkat</label>
                                      </div>
                                      </td>
                                      <td>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" required="required" id="jabatan" name="jabatan" placeholder="PENATA MUDA" value="<?php echo $data['jabatan']; ?>">
                                    </div>
                                  </td>
                                  </tr>
                                  

                                  <tr><th colspan="2" >
                                  <br/>
                                  <div class="col-sm-10 col-sm-offset-2">
                                      <a class="btn btn-danger" href="<?php echo base_url()."index.php/user/profil/".$data['NIP']; ?>">Cancel</a> 
                                      <input id="submit" name="btnSubmit" type="submit" value="Simpan" class="btn btn-primary">
                                    </div>
                                  </div>
                                  </th>
                                  </tr>

                                 
                                </form>
                            </div>
                    </div>
                    </table>             
							</div>
							<div class="tab-pane fade" id="tab2">
								<table border="0" style="width: 978px"; align="center">

                          <div align="center">
                            <form class="form-horizontal" style="width: 978px"; role="form" method="POST" action="<?php echo base_url()."index.php/user/update_gaji_user/".$data['NIP']; ?>">
                                <tr>  
                                  <th width="150">
                                  <div class="form-group">
                                    <label  for="NIP" class="col-sm-2 control-label">NIP</label>
                                  </th>
                                  <th width="750">
                                    <div class="col-sm-10">
                                      <input type="text" autocomplete="off" required="required" class="form-control" id="NIP" name="NIP" placeholder="196808121997022001" value="<?php echo $data2['NIP']; ?>">
                                    </div>
                                  </div>
                                  </th>
                                </tr>

                                <tr>
                                  <td>  
                                      <div class="form-group">
                                      <label for="nama" class="col-sm-2 control-label">TMT_CPNS</label>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="col-sm-10">
                                      <input type="date" class="form-control" id="tmt_cpns" required="required" name="tmt_cpns"  value="<?php echo $data2['tmt_cpns']; ?>">
                                      </div>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td>  
                                      <div class="form-group">
                                      <label for="golongan" class="col-sm-2 control-label">Golongan</label>
                                      </div>
                                  </td>
                                  <td>
                                      <div class="col-sm-10">
                                      <input type="text" class="form-control" id="golongan" required="required" name="golongan" value="<?php echo $data2['golongan']; ?>">
                                      </div>
                                  </td>
                                  </tr>


                                  <tr>
                                  <td>
                                      <div class="form-group">
                                      <label for="skpdt" class="col-sm-2 control-label">TMT_Pangkat</label>
                                      </div>
                                  </td>
                                  <td>
                                    <div class="col-sm-10">
                                      <input type="date" required="required"  class="form-control" id="tmt_pangkat" name="tmt_pangkat" value="<?php echo $data2['tmt_pangkat']; ?>">
                                    </div>
                                  </td>
                                  </tr>
                                  <tr><td>
                                      <div class="form-group">
                                       <label for="Unit kerja" class="col-sm-2 control-label">Pangkat </label>
                                      </div>
                                      </td>
                                      <td>
                                      <div class="col-sm-10">
                                      <input type="text" class="form-control"  id="jabatan" name="jabatan" placeholder="KEPALA URUSAN" value="<?php echo $data2['jabatan']; ?>">
                                      </div>
                                      </td>
                                  </tr>
                                  <tr><td>
                                      <div class="form-group">
                                      <label for="pangkat" class="col-sm-2 control-label">TMT_KGB</label>
                                      </div>
                                      </td>
                                      <td>
                                    <div class="col-sm-10">
                                      <input type="date" class="form-control" required="required" id="tmt_kgb" name="tmt_kgb"  value="<?php echo $data2['tmt_kgb']; ?>">
                                    </div>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td>
                                  <tr><td>
                                      <div class="form-group">
                                      <label for="jabatan" class="col-sm-2 control-label">Grade</label>
                                      </div>
                                      </td>
                                      <td>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" required="required" id="grade" name="grade" placeholder="8" value="<?php echo $data2['grade']; ?>">
                                    </div>
                                  </td>
                                  </tr>
                                  <tr>
                                  <td>
                                      <div class="form-group">
                                      <label for="gaji" class="col-sm-2 control-label">Gaji</label>
                                      </div>
                                      </td>
                                      <td>
                                    <div class="col-sm-10">
                                      <input type="text" class="form-control" required="required" id="gaji" name="gaji" placeholder="30000000" value="<?php echo $data2['gaji']; ?>">
                                    </div>
                                  </td>
                                </tr>
                                  <tr><th colspan="2" >
                                  <br/>
                                  <div class="col-sm-10 col-sm-offset-2">
                                      <a class="btn btn-danger" href="<?php echo base_url()."index.php/user/profil/".$data['NIP']; ?>">Cancel</a> 
                                      <input id="submit" name="btnSubmit" type="submit" value="Simpan" class="btn btn-primary">
                                    </div>
                                  </div>
                                  </th>
                                  </tr>

                                  
                                </form>
                            </div>
                    </div>
                    </table>             
							</div>
							
						</div>
					</div>
				</div><!--/.panel-->
			</div><!--/.col-->
			
			
			
		</div><!-- /.row -->
		
	</div><!--/.main-->

	<script src="<?php echo base_url()."assets/js/"; ?>jquery-1.11.1.min.js"></script>
	<script src="<?php echo base_url()."assets/js/"; ?>bootstrap.min.js"></script>
	<script src="<?php echo base_url()."assets/js/"; ?>chart.min.js"></script>
	<script src="<?php echo base_url()."assets/js/"; ?>chart-data.js"></script>
	<script src="<?php echo base_url()."assets/js/"; ?>easypiechart.js"></script>
	<script src="<?php echo base_url()."assets/js/"; ?>easypiechart-data.js"></script>
	<script src="<?php echo base_url()."assets/js/"; ?>bootstrap-datepicker.js"></script>
	<script>
		!function ($) {
			$(document).on("click","ul.nav li.parent > a > span.icon", function(){		  
				$(this).find('em:first').toggleClass("glyphicon-minus");	  
			}); 
			$(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
		}(window.jQuery);

		$(window).on('resize', function () {
		  if ($(window).width() > 768) $('#sidebar-collapse').collapse('show')
		})
		$(window).on('resize', function () {
		  if ($(window).width() <= 767) $('#sidebar-collapse').collapse('hide')
		})
	</script>	
</body>

</html>
