<?php 
session_start();
include ('config.php'); 

$post=$_POST['idpost'];;
$tanggal	= $_POST['tanggal'];
$email		= $_POST['email'];
$comment   =$_POST['comment']; 




$sql= "INSERT INTO comments (tanggal_comment,idpost ,user, komentar )
             VALUES ('$tanggal','$post','$email','$comment')";

if ($conn->query($sql) === TRUE) {
	header("location: konten_post_full.php?post=$post");
}else{
	echo "Error: ".$sql."<br>".$conn->error;
}
?>