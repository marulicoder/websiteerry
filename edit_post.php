<?php
session_start();
include('config.php');

//ambil id post dari URL dengan GET
$idpost=$_GET['p'];;

//SQL untuk ambil item2 post sesuai id post 
$sql1="select * from post where idpost='$idpost'";
$result1=$conn->query($sql1);
while($row=$result1->fetch_assoc()){
$id=$row['idpost']; $tanggal=$row['tanggal_post'];
$penulis=$row['penulis']; $judul=$row['judul'];
$kategori=$row['idkategori']; $isi=$row['isi'];
}

$user='';
if(isset($_SESSION['user'])) $user=$_SESSION['user']; else $user=$penulis;

//mengambil katagori untuk combo
$sql2='select * from kategori';
$result2=$conn->query($sql2);
?>

<!... from edit post ...>
<form action='proseseditpost.php' method='post'>
<table>
<td>Tanggal</td><td>:</td>
<td><input type='hidden' value='<?php 
									date_default_timezone_set('Asia/Jakarta');
									echo date('d-m-y h:i:sa'); ?>' name='tanggal'></td></tr>
<tr><td>penulis</td><td>:</td><td>
	<input type='hidden' value='<?php echo $user ;?>' name='penulis'></td></tr>
<tr><td>judul</td><td>:</td><td><input type='text' name='judul' value='<?php echo $judul;?>'></td></tr>
<tr><td>kategori</td><td>:</td><td>
	<select name='idkategori'>
<?php while($row=$result2->fetch_assoc()){
	$k   = $row['namakategori'];
	$idk = $row['idkategori'];
   echo "<option value=$idk>$k</option>";} ?>

</select>
</td></tr>
<tr><td>isi</td><td>:</td><td><textarea name='isi' ><?php echo $isi;?></textarea></td></tr>
<tr><td align='center' colspan='3'>
	<input type='hidden' name='idpost' value='<?php echo $idpost;?>'>
	<input type='submit'></td></tr>
</table>
</form> 
