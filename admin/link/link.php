<?php
if ($_POST[submit])
{	
mysql_query("insert into mirror  (link,id_posting) values ('$_POST[link]','$_POST[id_posting]')");	
}
echo "
<form method=post action='$PHP_SELF'>
<select name='id_posting'>
<option value='0'> --PILIH JUDUL-- </option>";
$d=mysql_query("select * from posting where id_kategori='3'");
while ($r=mysql_fetch_array($d))
{
echo "<option value='$r[id_posting]'>$r[judul]</option>";
}
echo "</select>
<input type=text name=link placeholder='link download'><br>
<input type=submit name=submit>
</form>
";

$m=mysql_query("select * from mirror order by id_mirror desc");
while ($t=mysql_fetch_array($m))
{
$c=mysql_fetch_array(mysql_query("select * from posting where id_posting='$t[id_posting]'"));
echo "<p>$c[judul] | $t[link]</>";if ($_SESSION[namauser] == 'aangnaja77')
	{ 
	echo "|view $r[lihat]| <a href='link/hapus_link.php?id=$t[id_mirror]'><img src=image/b_drop.png></a>| <a href=?read=editlink&id=$t[id_mirror]><img src=image/b_edit.png></a>";
	} 	
}

?>