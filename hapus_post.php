<?php
include('config.php');

$idpost=$_GET['p'];

$sql="delete from post where idpost='$idpost'";

if ($conn->query($sql) == TRUE)
{
    header("location: tampilpost.php");
}

?>

