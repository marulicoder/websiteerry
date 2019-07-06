<?php
session_start();
$userform=$_SESSION['username'];
$level=$_SESSION['level'];
?>

<!DOCTYPE html>
<html>
<title>Welcome To Web</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>
  
  .w3-right h2{
    font-size: 14px;
  }

  body {
    background-color: #1efbe6;
}
</style>


<body>

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-wide w3-padding w3-card">
    <a href="tampilan.php" class="w3-bar-item w3-button"><b>Welcome</b>To<b>Websiteku</a>
    <!-- Float links to the right. Hide them on small screens -->
    <div class="w3-right w3-hide-small">
      <a href="Login.php" class="w3-bar-item w3-button">Login</a>
    </div>
    <div class="w3-right w3-hide-small">
      <a href="profile.php" class="w3-bar-item w3-button">Profile</a>
    </div>
    <div class="w3-right w3-hide-small">
      <a href="tambah_post.php" class="w3-bar-item w3-button">Tambah Postingan</a>
    
    </div>

    <div class="w3-right w3-hide-small">
      <h2><?php echo "Username $userform Seorang $level";?></h2>
    </div>
  </div>
</div>
<div class="w3-dropdown-hover w3-hide-small">
    <button class="w3-button" title="Notifications">Dropdown <i class="fa fa-caret-down"></i></button>     
    <div class="w3-dropdown-content w3-card-4 w3-bar-block">
      <a href="tampilan.php" class="w3-bar-item w3-button">Link</a>
      <a href="tampilan.php" class="w3-bar-item w3-button">Link</a>
      <a href="tampilan.php" class="w3-bar-item w3-button">Link</a>
    </div>
<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="home">
  <img class="w3-image" src="img/2.jpg" alt="" width="1500" height="800">

    
  </div>
</header>
<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Selamat Datang</h3>
  </div>

      
  </div>

  

  <!-- About Section -->
  <div class="w3-container w3-padding-32" id="about">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16">Tentang Saya</h3>
    <p> Nama saya Erry Maruli Tua saya kuliah di Universitas Darma Persada saya jurusan Teknik Informatika. Jadilah pekerja keras yang selalu percaya pada kemampuan diri sendiri. Jangan jadi orang yang selalu berlindung di balik orang lain, Shalom Kawan.</p>   
  </div>

<!-- Footer -->
<footer class="w3-center w3-red w3-padding-16">
  <p>&copy;Copyright2019 Erry Maruli Tua<a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green"></a></p><?php
			include ("counter.php");
            echo "$kunjungan[0] kali kunjungan</p>";
            ?></p>
</footer>

</body>
</html>
