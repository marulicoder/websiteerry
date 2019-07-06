<?php
include('config.php');
$mulai=0;
if(isset($_GET['paging'])) $mulai=$_GET['paging'];
$sql="select a.*,b.namakategori
from post a
join kategori b on a.idkategori=b.idkategori
limit $mulai,2
";
$result=$conn->query($sql);

echo "<table border=0>";
$no=0;
while($row=$result->fetch_assoc()){
	$no++;
	$id=$row['idpost'];
	$tanggal=$row['tanggal_post'];
	$penulis=$row['penulis'];
	$kategori=$row['idkategori'];
	$namakategori=$row['namakategori'];
	$isi_full=$row['isi'];
	$isi_sebagian=substr($row['isi'],1,100);
	echo "
	<tr><td><small>Tanggal dipost : $tanggal, Penulis : $penulis</small></td></tr>
	<tr><td><small>Kategori : $namakategori</small></td></tr>
	<tr><td></td></tr>
	<tr><td>$isi_sebagian ...<a href='konten_post_full.php?post=$id'>read more</a> </td></tr>
	<tr><td><br> </td></tr>
	";
}
echo "</table>";

echo "Paging :
<a href=?paging=0>1</a> <a href=?paging=2>2</a> <a href=?paging=4>3</a>";
?>