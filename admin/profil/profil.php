<?php
echo "<p>email :$_SESSION[member]</p>";
echo "<a href=?read=profil&get=pass><img src=image/s_passwd.png>ganti password</a>";



$d=mysql_query("select * from posting where email='$_SESSION[member]' order by id_posting desc ");
$n=mysql_num_rows($d);
if ($n == 0 )
{
	echo "<p>anda belum mebuat topik";	
}
while ($r=mysql_fetch_array($d))
{
	$kat=mysql_fetch_array(mysql_query("select * from kategori"));
	echo "<li><a href=?read=$r[judul_seo]>$kat[nama_kategori]|$r[judul]</a>|&nbsp <a href=profil/delpost.php?id=$r[id_posting]> <img src=image/b_drop.png /></a></li>";	
}

?>