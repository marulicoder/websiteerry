<?php
include('config.php');
$post=0;
if(isset($_GET['post'])) $post=$_GET['post'];
$sql="select a.*,b.namakategori
from post a
join kategori b on a.idkategori=b.idkategori
where idpost='$post'
";
$result=$conn->query($sql);

echo "<table border=0>";
$no=0;
while($row=$result->fetch_assoc()){
	$no++;
	$idpost=$row['idpost'];
	$tanggal=$row['tanggal_post'];
	$penulis=$row['penulis'];
	$kategori=$row['idkategori'];
	$namakategori=$row['namakategori'];
	$isi_full=$row['isi'];
	$isi_sebagian=substr($row['isi'],1,100);
	echo "
	<tr><td><small>Tanggal dipost : $tanggal, Penulis :$penulis</small></td></tr>
	<tr><td><small>kategori : $namakategori</small></td></tr>
	<tr><td>$isi_full</td></tr>
	<tr><td><br> </br></td></tr>
	";
}
echo "</table>";
echo "Komentar pengunjung : <br>";
include('comment_post.php');

echo "<a href='tampilan.php'>Home</a>";
?>