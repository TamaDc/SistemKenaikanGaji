<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><h1>DAFTAR PEGAWAI NEGERI SIPIL</h1></center>
	<hr>
	<table width="530" >	
		<tr>
			<td>
				<tr style="background:#3f8fb7;">

          <th width="100"><center>NIP</center></th>
          <th width="180"><center>Nama</center></th>
          <th width="50"><center>Golongan</center></th>
          <th width="100"><center>Status</center></th>
                                     
        </tr>
                                    
        <?php foreach($db_pegawai as $data){ ?>
        <tr>
                  <td><?php echo $data['NIP']; ?></td>
                  <td><?php echo $data['nama']; ?></td>
                  <td><center><?php echo $data['golongan']; ?></center></td>
                  <td><?php echo $data['jabatan']; ?></td>
        </tr>
        <?php } ?>        
			</td>
		</tr>
	</table>
</body>
</html>