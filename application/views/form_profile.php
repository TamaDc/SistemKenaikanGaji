<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
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
       
        dt { font-style: italic; font-weight: bold; font-size: 16px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 80px; border-right: 1px solid #999;  }
        dd { width: 600px; float: right; }
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

    <?php $this->load->view('nav.php'); ?>
    
        
    <?php $this->load->view('sidebar.php'); ?>

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
        
        <div class="clear"></div>
        
        <dl>
            <dd class="clear"></dd>
            
            <dt>Biodata</dt>
            <dd>
                <!-- <h2></h2> -->
                <p><strong>NIP:</strong> <?php echo $data['NIP']; ?><br />
                   <strong>Nama:</strong> <?php echo $data['nama']; ?></br>
                   <strong>Pendidikan:</strong> <?php echo $data['pendidikan']; ?></br>
                </p>                   
                     
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Jabatan</dt>
            <dd>
                <h2>Office skills</h2>
                   <strong>Jabatan:</strong><?php echo $data['jabatan']; ?><br />
                   <strong>Status:</strong> <?php echo $data['status']; ?></br>
                   <strong>Unit Kerja:</strong> Scale Tending</br>
                   <strong>TMT CPNS:</strong> <?php echo $data2['tmt_cpns']; ?></p>
            </dd>
            
            <dd class="clear"></dd>
            
            <dt>Experience</dt>
            <dd>
                <h2>Doomsday Cult</h2>
                <ul>
                    <strong>Golongan:</strong><?php echo $data2['golongan']; ?> / <?php echo $data['periode']; ?><br />
                   <strong>TMT Pangkat:</strong><?php echo $data2['tmt_pangkat']; ?></br>
                   <strong>Grade:</strong><?php echo $data2['grade']; ?></br>
                   <strong>Gaji:</strong><?php echo $data2['gaji']; ?></br>
                   <strong>TMT KGB Terakhir:</strong><?php echo $data2['tmt_kgb']; ?></br>
                   <strong>Masa Kerja Tahun: <?php 
                                                if($data2['masa_kerja_tahun'] === NULL)
                                                {
                                                    echo " ";
                                                }
                                                else{
                                                    echo $data2['masa_kerja_tahun']; 
                                                    
                                                }?>

                   
                   Bulan:</strong><?php  if($data2['masa_kerja_bulan'] != NULL)
                                                {
                                                    echo $data2['masa_kerja_bulan']; 
                                                }
                                                else{
                                                    echo " ";
                                                }
                                                


                   ?></p>
                </ul>
            </dd>
               
        </dl>

                                    
        
        <div class="clear"></div>

    <p align="right">
    <a class="btn btn-success" target="_blank" href="<?php echo base_url()."index.php/admin/print_profile/".$data['NIP']; ?>" >Export To PDF</a> </p>
    </div>
    
    </div>

    <script src="<?php echo base_url()."assets/js/"; ?>jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url()."assets/js/"; ?>bootstrap.min.js"></script>
    <script src="<?php echo base_url()."assets/js/"; ?>chart.min.js"></script>
    <script src="<?php echo base_url()."assets/js/"; ?>chart-data.js"></script>
    <script src="<?php echo base_url()."assets/js/"; ?>easypiechart.js"></script>
    <script src="<?php echo base_url()."assets/js/"; ?>easypiechart-data.js"></script>
    <script src="<?php echo base_url()."assets/js/"; ?>bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url()."assets/js/"; ?>bootstrap-table.js"></script>
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