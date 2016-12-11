<?php
echo "<tr><td><p><h4><img src=image/b_group.png> DATABASE KOMENTAR</h4></p></td></tr>";
$d=mysql_query("select * from kontak order by id_kontak desc ");
$n=mysql_num_rows($d);
while ($r=mysql_fetch_array($d))
{
	echo "<tr><td><span><img src='image/b_comment.png'><a href=#>$r[telpon]</a></span>|"; 

	echo "<b>$r[name]</b>|$r[komentar]<a href='komen/hapus_komen.php?id=$r[id_kontak]'><img src=image/b_drop.png></a>";
	 
	echo "</td></tr>";	

}
?>