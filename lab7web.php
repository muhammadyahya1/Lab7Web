<!DOCTYPE html>
<html lang="en">
 <form method="POST" name="frmpost" action="">
 	<table align="center" border="1" cellpadding="0" cellspacing="0">
 		<tr align="center"><td><h2> <b>Masukan Data Anda</b></h2></td></tr>
 		<tr>
 			<td>
 			<table width="450" border="0" cellpadding="0" cellspacing="10" align="center">
 				<tr>
 					<td>Nama</td>
 					<td> : </td>
 					<td><input nama="nama[]" type="text" size="40" /></td>
 				</tr>
				<tr>
 					<td>Tempat Tgl Lahir</td>
 					<td> : </td>
 					<td><input name="Tgl" type="text" size="40" /></td>
 				</tr>
 				
 				<tr>
 					<td> <PRE></PRE>kerjaan</td>
 					<td> : </td>
 					<td><input name="Pekerjaan[]" type="40" /></td>
 				</tr>
 				<tr>
 					<td colspan="4" align="center"><input type="submit" name="btn0k" value="submit" /></td>
 				</tr>
 			</table>
 		</td>
 	</tr>
 </table>
</form>
<center>
<table border="1" cellpadding="5" cellspacing="5">
	<?php

	error_reporting(0);
	$Nama =$_POST['Nama'];
	$tgl = $_POST['Tgl'];
	$Pekerjaan= $_POST['Pekerjaan'];
	
	 {
	?>

	 <tr>
		<td align="center" colspan="2">
			<?php
			echo '<b>Hasil Biodata Yang di Inputkan</b><br>';?>
		</td>	
	</tr>
    <tr>
		<td><?php echo 'Muhammad Yahya'?></td>
	</tr>
	<tr>
		<td><?php echo 'Bogor 06 Januari 1997'?></td>
	</tr>
	<tr>
		<td><?php echo 'Karyawan Swasta'?></td>
		
	</tr>
	<?php	
		}
	 ?>

</table>
</center>  
</html>


