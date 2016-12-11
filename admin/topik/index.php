<?php

session_start();
 
  $_SESSION['KCFINDER']=array();
  $_SESSION['KCFINDER']['disabled'] = false;
  $_SESSION['KCFINDER']['uploadURL'] = "../tinymcpuk/gambar";
  $_SESSION['KCFINDER']['uploadDir'] = "";
$aksi="aksi_berita.php";
echo "<a href=tambah_berita.php>++ tambah berita</a>";
$d=mysql_query("select * from berita order by id_berita desc");
while ($r=mysql_fetch_array($d))
{
$kat=mysql_fetch_array(mysql_query("select * from kategori where id_kategori='$r[id_kategori]'"));
$no++;	
echo "<p>$no.$kat[nama_kategori]-$r[judul]  <a href=edit_berita.php?id=$r[id_berita]>edit</a>|<a href=hapus_berita.php?id=$r[id_berita]>hapus</a>";	

}


?>
