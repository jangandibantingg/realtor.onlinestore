<?php
echo "<tr><td><p><h4><img src=image/b_group.png> DAFTAR ISI</h4></p></td></tr>";
$d=mysql_query("select * from posting order by id_posting desc ");
$n=mysql_num_rows($d);
while ($r=mysql_fetch_array($d))
{
	
	$kat=mysql_fetch_array(mysql_query("select * from kategori where id_kategori='$r[id_kategori]'"));
	echo "<tr><td><span>";
	if ($kat[id_kategori] == 2)
	{
	echo "<img src='image/new_struct.png'>";
	}
	elseif ($kat[id_kategori] == 3)
	{
	echo "<img src='image/b_chart.png'>";
	}
	else
	{
	echo "<img src='image/b_browse.png'>";
	}
		
	echo" <a href=?read=$r[judul_seo]>$kat[nama_kategori]|$r[judul]</a></span>"; 
 
	echo "|view $r[lihat]| <a href='topik/hapus_berita.php?id=$r[id_posting]'><img src=image/b_drop.png></a>| ";
	if ($kat[id_kategori] == 2)
	{
	echo "<a href=?read=editrumah&id=$r[id_posting]><img src='image/b_edit.png'>";
	}
	else
	{
	echo "<a href=?read=editberita&id=$r[id_posting]><img src=image/b_edit.png></a>";	
	}
	 
	echo "</td></tr>";	
	}
?>