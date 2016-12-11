<?php



// definisikan koneksi ke database
$server = "localhost";
$username = "root";
$password = "";
$database = "platinum";


mysql_connect($server,$username,$password) or die("Koneksi gagal");
mysql_select_db($database) or die("MAAF UNTUK SEMENTARA WEBSITE TIDAK BISA DIGUNAKAN");



  
  
?>
