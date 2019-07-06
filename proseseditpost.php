<?php
session_start();
include('config.php');

$idpost=$_POST['idpost'];
$tanggal=$_POST['tanggal'];
$tanggal=$_POST['tanggal'];
$penulis=$_POST['penulis'];
$judul=$_POST['judul'];
$namakategori=$_POST['idkategori'];
$isi=$_POST['isi'];

$sql="update post
     set tanggal_post='$tanggal',penulis='$penulis',judul='$judul',isi='$isi',idkategori='$idkategori'
     where idpost='$idpost'";

if ($conn->query($sql) === TRUE)
{
	//echo "Berhasil....";
	header("location: tampilpost.php");

} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

?>