<<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style type="text/css">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistem Informasi</title>

    <link href="<?php echo base_url()."assets/css/"; ?>bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets/css/"; ?>datepicker3.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets/css/"; ?>bootstrap-table.css" rel="stylesheet">
    <link href="<?php echo base_url()."assets/css/"; ?>styles.css" rel="stylesheet">

    <!--Icons-->
    <script src="<?php echo base_url()."assets/js/"; ?>lumino.glyphs.js"></script>

    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->

     <title>One Page Resume</title>

     <style type="text/css">
        * { margin: 0; padding: 0; }
        body { font: 13px Helvetica, Sans-Serif; line-height: 24px; background: url(images/noise.jpg); }
        .clear { clear: both; }
        #page-wrap { width: 800px; margin: 40px auto 60px; }
        #pic { float: right; margin: -30px 0 0 0; }
        h1 { margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 42px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999; }
        h2 { font-size: 12px; margin: 0 0 6px 0; position: relative; }
        h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 12px; color: #999; font-weight: normal; }
        p { margin: 0 0 16px 0; }
        a { color: #999; text-decoration: none; border-bottom: 1px dotted #999; }
        a:hover { border-bottom-style: solid; color: black; }
       
        dt { font-style: italic; font-weight: bold; font-size: 16px; text-align: right; padding: 0 26px 0 0; width: 100px; float: left; height: 80px; border-right: 1px solid #999;  }
        dd { width: 400px; float: right; }
        dd.clear { float: none; margin: 0; height: 15px; }
     
  </style>
</head>
<body>

  <?php foreach ($db_pegawai as $data) {
        # code...
    } ?>

     <?php foreach ($db_gaji as $data2) {
        # code...
    } ?>

    <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div id="page-wrap" a;>
    
       
    
        <div id="contact-info" class="vcard">
        
            <!-- Microformats! -->
        
        <h1 class="fn">Profile</h1>
        
            
        </div>
                
        <div id="objective">

            <p>
               Pegawai negeri sipil yang bekerja di pemerintahan kota semarang.
            </p>
        </div>
        
      <div class="clear">
        <p>&nbsp; </p>
        <table width="468">
          <tr>
            <td width="112" rowspan="2">Biodata</td>
            <td width="340"><strong>NIP:</strong> <?php echo $data['NIP']; ?></td>
          </tr>
          <tr>
            <td><strong>Nama:</strong> <?php echo $data['nama']; ?></br>
            <strong>Pendidikan:</strong> <?php echo $data['pendidikan']; ?></br></td>
          </tr>
          <tr>
            <td colspan="2"><hr></td>
          </tr>
          <tr>
            <td rowspan="2">Jabatan</td>
            <td><dl>
              <strong>Jabatan:</strong><?php echo $data['jabatan']; ?>
            </dl></td>
          </tr>
          <tr>
            <td><dl>
              <strong>Status:</strong> <?php echo $data['status']; ?></br>
              <strong>Unit Kerja:</strong> Scale Tending</br>
              <strong>TMT CPNS:</strong> <?php echo $data2['tmt_cpns']; ?>
              </p>
            </dl></td>
          </tr>
          <tr>
            <td colspan="2"><hr></td>
          </tr>
          <tr>
            <td rowspan="5">Experience</td>
            <td><dl>
              <strong>Golongan:</strong><?php echo $data2['golongan']; ?>
            </dl></td>
          </tr>
          <tr>
            <td><dl>
              <strong>TMT Pangkat:</strong><?php echo $data2['tmt_pangkat']; ?></br>
            </dl></td>
          </tr>
          <tr>
            <td><dl>
              <strong>Grade:</strong><?php echo $data2['grade']; ?></br>
            </dl></td>
          </tr>
          <tr>
            <td><dl>
              <strong>Gaji:</strong><?php echo $data2['gaji']; ?>
              </p>
            </dl></td>
          </tr>
          <tr>
            <td><dl>
              <strong>TMT KGB Terakhir:</strong><?php echo $data2['tmt_kgb']; ?>
              </p>
            </dl></td>
          </tr>
        </table>
        <p><br />
      </p>
</div>
<div class="clear"></div>
    </div>
    
    </div>


</body>
</html>