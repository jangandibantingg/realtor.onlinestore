<?php
echo "<tr><td><p><h4><img src=image/b_group.png> 100 % FREE DOWNLOAD</h4></p></td></tr>";
$d=mysql_query("select * from posting where id_kategori='3' order by id_posting desc ");
$n=mysql_num_rows($d);
while ($r=mysql_fetch_array($d))
{
	
	$kat=mysql_fetch_array(mysql_query("select * from kategori where id_kategori='$r[id_kategori]'"));
	echo "<tr><td><span><img src='image/b_chart.png'> <a href=?read=$r[judul_seo]>$kat[nama_kategori]|$r[judul]</a></span>"; 
	if ($_SESSION[namauser] == 'aangnaja77')
	{ 
	echo "|view $r[lihat]| <a href='topik/hapus_berita.php?id=$r[id_posting]'><img src=image/b_drop.png></a>| <a href=?read=editberita&id=$r[id_posting]><img src=image/b_edit.png></a>";
	} 
	echo "</td></tr>";	

}
?>