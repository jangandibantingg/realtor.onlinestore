<?php

$r=mysql_fetch_array(mysql_query("select * from posting where judul_seo='$_GET[read]'"));
if($r[id_posting] > 0 )
{
?>
<tr><td>
 <?PHP //=== ECHO "<h4>Posting by  $r[email]</h4>"; ?> 
<h3><?php echo "$r[judul]";?></h3>
<img src="../gambar/<?php echo "$r[gambar]";?>" />
<p><?php echo "$r[harga]| $r[luas] | $r[alamat] | $r[tahun] ";?></p>
<p></p><?php echo "$r[isi_posting]";?>
</td>
</tr>
<?php
	echo "<tr><td><b>lihat juga</b></td></tr>";
	$baca=mysql_query("select * from posting order by rand() desc limit 5");
	while ($b=mysql_fetch_array($baca))
	{
	$kat=mysql_fetch_array(mysql_query("select * from kategori where id_kategori='$b[id_kategori]'"));
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
		
	echo" <a href=?read=$b[judul_seo]>$kat[nama_kategori]|$b[judul]</a></span>"; 
		

	echo "|view $b[lihat]| <a href='topik/hapus_berita.php?id=$b[id_posting]'><img src=image/b_drop.png></a>|"; 
	
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
<tr><td> &nbsp </td></tr>
<tr><td>  </td></tr>
<?php
while ($d=mysql_fetch_array($k))
{
echo "<tr><td><img src='image/b_comment.png'><span style='color: #3366ff; font-family: andale mono,times;'><strong>$d[username]</strong></span><br> $d[komen]</td></tr>";	
}
?>


<?php
}
?>