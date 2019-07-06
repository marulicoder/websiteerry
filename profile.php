<?php
session_start();
$userform=$_SESSION['username'];
$level=$_SESSION['level'];
?>
<style type="text/css">
* {box-sizing:border-box}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
.w3-right h2{
    font-size: 10px;
  }

  body {
    background-color: #1efbe6;
}
/* Hide the images by default */
.mySlides {
  display: none;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -22px;
  padding: 16px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}
/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none"; 
  }
  
}
/* Add a black background color to the top navigation */
.topnav {
  background-color: #333;
  overflow: hidden;
}

/* Style the links inside the navigation bar */
.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

/* Add an active class to highlight the current page */
.active {
  background-color: #4CAF50;
  color: white;
}

/* Hide the link that should open and close the topnav on small screens */
.topnav .icon {
  display: none;
}

/* Dropdown container - needed to position the dropdown content */
.dropdown {
  float: left;
  overflow: hidden;
}

/* Style the dropdown button to fit inside the topnav */
.dropdown .dropbtn {
  font-size: 17px; 
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

/* Style the dropdown content (hidden by default) */
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

/* Style the links inside the dropdown */
.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

/* Add a dark background on topnav links and the dropdown button on hover */
.topnav a:hover, .dropdown:hover .dropbtn {
  background-color: #555;
  color: white;
}

/* Add a grey background to dropdown links on hover */
.dropdown-content a:hover {
  background-color: #ddd;
  color: black;
}

/* Show the dropdown menu when the user moves the mouse over the dropdown button */
.dropdown:hover .dropdown-content {
  display: block;
}

/* When the screen is less than 600 pixels wide, hide all links, except for the first one ("Home"). Show the link that contains should open and close the topnav (.icon) */
@media screen and (max-width: 600px) {
  .topnav a:not(:first-child), .dropdown .dropbtn {
    display: none;
  }
  .topnav a.icon {
    float: right;
    display: block;
  }
}

/* The "responsive" class is added to the topnav with JavaScript when the user clicks on the icon. This class makes the topnav look good on small screens (display the links vertically instead of horizontally) */
@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive a.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
  .topnav.responsive .dropdown {float: none;}
  .topnav.responsive .dropdown-content {position: relative;}
  .topnav.responsive .dropdown .dropbtn {
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
 

<body>

<div class="topnav" id="myTopnav">
  <a href="tampilan.php" class="active">Home</a>
  <a href="profile.php">Profile</a>
  <a href="aboutus.php">About Us</a>
  <div class="dropdown">
    <button class="dropbtn">Konten 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="profile.php">Postingan</a>
      
      <a href="#">Artikel</a>
      <a href="tambah_post.php">Tambah Posting</a>
    </div>
  </div> 
  <div class="w3-right w3-hide-small">
      <a href="Login.php" class="w3-bar-item w3-button">Login</a>
    </div>
  <a ><?php echo "Username $userform Seorang $level";?></a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
</div>
<br>

<!-- Header -->
<header class="w3-display-container w3-content w3-wide" style="max-width:1500px;" id="profile">
  <img class="w3-image" src="img/2.jpg" alt="" width="1500" height="800">

    
  </div>
</header>

<!-- Page content -->
<div class="w3-content w3-padding" style="max-width:1564px">

  <!-- Project Section -->
  <div class="w3-container w3-padding-32" id="projects">
    <h3 class="w3-border-bottom w3-border-light-grey w3-padding-16"><marquee>Selamat Datang Di Websiteku</marquee></h3>
  </div>
  </div>

     <?php 
    include('config.php');
     
    $sql  = "SELECT * FROM post order by tanggal_post";
    $result = $conn->query($sql);

    echo "<table border=1>";
    echo "<tr>
        <th>No</th>
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
      $id     = $row['idpost'];
      $tanggal  = $row['tanggal_post'];
      $penulis  = $row['penulis'];
      $judul    = $row['judul'];
      $kategori   = $row['idkategori'];
      $isi    = $row['isi'];

      echo "<tr>
          <td>$no</td>
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
    
<!-- Footer -->
<footer class="w3-center w3-red w3-padding-16">
  <center><p>&copy;Copyright2019 Erry Maruli Tua<a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green"></a></p><?php
			include ("counter.php");
            echo "$kunjungan[0] kali kunjungan</p>";
            ?></p></center>
</footer>

</body>
</html>
