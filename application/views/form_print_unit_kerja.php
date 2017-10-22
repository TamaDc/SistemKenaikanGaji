<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><h1>DAFTAR UNIT KERJA</h1></center>
	<hr>
	<table width="530" >	
		<tr>
			<td>
				<tr style="background:#3f8fb7;">

          <th width="20"><center>ID</center></th>
          <th width="150"><center>Jabatan</center></th>
          <th width="50"><center>Level</center></th>
                                     
        </tr>
                                    
        <?php foreach($db_unit_kerja as $data){ ?>
        <tr>
                  <td><?php echo $data['id_unit_kerja']; ?></td>
                  <td><?php echo $data['nama_unit_kerja']; ?></td>
                  <td><?php echo $data['eselon']; ?></td>
        </tr>
        <?php } ?>        
			</td>
		</tr>
	</table>
</body>
</html>