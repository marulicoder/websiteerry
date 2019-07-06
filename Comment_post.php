<?php
include('config.php');
$sql="select *from comments where idpost";
$result=$conn->query($sql);
  
echo "<table border=0>";
$no=0;
while($row=$result->fetch_assoc()){
$no++;
$idpost=$row['idpost'];
$id=$row['idcomment'];
$tanggal=$row['tanggal_comment'];
$email=$row['user'];
$comment=$row['komentar'];

echo "
<tr><td><b><img style='width: 50px;'src='img/comment.png'></b></td></tr>
<tr><td><small>$email pada $tanggal</small></td></tr>
<tr><td><small>Komentar : $comment</small></td></tr>
<tr><td></td></tr>
<tr><td><br> </br></td></tr>
";
}
echo "</table>";
echo "<b>Tinggalkan Komentar Anda di sini : </b><br>";
echo "<i>Email dibutuhkan jika suatu ketika kami ingin menghubungi anda saja, kosongkan jika ragu</i><br><br>";
?> 
<form action="prosestambahcommentpost.php" method='post'>
	<table>
	    <input type=hidden name="idpost" value="<?php echo $_GET['post']; ?>"
		<tr>
			<td>Tanggal</td>
		<td>:</td>
		<td><?php 
									date_default_timezone_set('Asia/Jakarta');
									echo date('y-m-d h:i:sa'); ?></td> 
		<td><input type="hidden" value="<?php 
									date_default_timezone_set('Asia/Jakarta');
									echo date('y-m-d h:i:sa'); ?>" name="tanggal"></td>
		</tr>
		<tr>
			<td>e-mail</td><td>:</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Komentar</td><td>:</td>
			<td><input type="text" name="comment"></td>
		</tr>
		<tr>
			<td align="center" colspan="3">
				<input type="submit" value="kirim">
			</td>
		</tr>
	</table>
	
</form>