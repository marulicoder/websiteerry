<?php
  include('config.php'); // menghubungkan php dengan koneksi database
  session_start(); // mengaktifkan session

  $userform = $_POST['username'];
  $passform = $_POST['password'];

  // menyeleksi data user dengan username dan password yang sesuai
  $query = "SELECT * FROM user WHERE username='$userform' and password='$passform'";

  // mengecek kembali koneksi database kemudian menjalankan perintah query
  $penghubung = mysqli_query($conn, $query);

  // cek apakah username dan password di temukan pada database
  if(mysqli_num_rows($penghubung) > 0){
    $data = mysqli_fetch_assoc($penghubung);

    // cek jika user login sebagai admin
    if($data['level']=="admin"){

      // buat session login dan username
		$_SESSION['username'] = $userform;
		$_SESSION['level'] = "admin";
		header ('location: tampilan.php');
		
    }
    elseif ($data['level']=="user"){
    // buat session login dan username
		$_SESSION['username'] = $userform;
		$_SESSION['level'] = "user";

		header ('location: tampilan.php');
    }
    else {
    // alihkan ke halaman login kembali
    header ('location: login.php');
    }
  } 
?>