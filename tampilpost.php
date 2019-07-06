<?php 
session_start();
include('config.php');
 
$sql	= "SELECT * FROM post order by tanggal_post";
$result = $conn->query($sql);

echo "<table border=1>";
echo "<tr>
	 	<th>No</th>
	 	<th>Id post</th>
	 	<th>Tanggal post</th>
	 	<th>Penulis</th>
	 	<th>Judul</th>
	 	<th>Kategori</th>
	 	<th>Isi</th>
	 	<th>Aksi</th>
	  </tr>
	 ";
$no = 0;

while($row = $result->fetch_assoc()){
	$no++;
	$id 		= $row['idpost'];
	$tanggal 	= $row['tanggal_post'];
	$penulis 	= $row['penulis'];
	$judul		= $row['judul'];
	$kategori 	= $row['idkategori'];
	$isi 		= $row['isi'];

	echo "<tr>
			<td>$no</td>
			<td>$id</td>
			<td>$tanggal</td>
			<td>$penulis</td>
			<td>$judul</td>
			<td>$kategori</td>
			<td>$isi</td>
			<td><a href='edit_post.php?p=$id'>Ubah</a> - <a href='hapus_post.php?p=$id'>Hapus</a></td>
		</tr>";
}
echo "</table>";
echo "<a href='tambah_post.php'>Tambah Post</a>";
?>