<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<center><h1>DAFTAR JABATAN</h1></center>
	<hr>
	<table width="530" >	
		<tr>
			<td>
				<tr style="background:#3f8fb7;">

          <th width="20"><center>ID</center></th>
          <th width="150"><center>Jabatan</center></th>
          <th width="50"><center>Level</center></th>
                                     
        </tr>
                                    
        <?php foreach($db_jabatan as $data){ ?>
        <tr>
                  <td><?php echo $data['id_jabatan']; ?></td>
                  <td><?php echo $data['jabatan']; ?></td>
                  <td><?php echo $data['level']; ?></td>
        </tr>
        <?php } ?>        
			</td>
		</tr>
	</table>
</body>
</html>