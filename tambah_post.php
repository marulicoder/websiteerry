<?php 
session_start();
include('config.php');
$userfrom=$_SESSION['username'];
$level=$_SESSION['level'];
$user = '';

if(isset($_SESSION['user'])) $userfrom=$_SESSION['user'];

$sql = 'SELECT * FROM kategori';
$result = $conn->query($sql);


?>

<form action="prosestambahpost.php" method="POST">
	<table>
	 <tr>
		<td>Tanggal</td>
		<td>:</td>
		<td><?php 
									date_default_timezone_set('Asia/Jakarta');
									echo date('d-m-y h:i:sa'); ?></td> 
		<td><input type="hidden" value="<?php 
									date_default_timezone_set('Asia/Jakarta');
									echo date('d-m-y h:i:sa'); ?>" name="tanggal"></td>
	 </tr>
	 <tr> 	  
	 	<td>Penulis</td>
	 	<td>:</td>
	 	<td><?php echo $userfrom; ?></td>
	 	<td><input type="hidden" value="<?php echo $userfrom; ?>" name="penulis"></td>
	 </tr>
	 <tr>
	 	<td>Judul</td>
	 	<td>:</td>
	 	<td><input type="text" value="" name="judul"></td>
	 </tr>
	 <tr>
	 	<td>Kategori</td>
	 	<td>:</td>
	 	<td><select name="idkategori">
	 	<?php while($row = $result->fetch_assoc()){
	 					$k = $row['namakategori'];
	 					$idk = $row['idkategori'];
	 					echo "<option value=$idk> $k</option>";

	 		} ?>
	 	</select>
	 	</td>
	 </tr>
	 <tr>
	 	<td>Isi</td>
	 	<td>:</td>
	 	<td><textarea name="isi"></textarea></td>
	 </tr>
	 <tr>
	 	<td align="center" colspan=3><input type="submit"></td>
	 </tr>
	</table>
</form>