<?php
echo "<tr><td><p><h4><img src=image/b_group.png> DATABASE MEMBER</h4></p></td></tr>";
$d=mysql_query("select * from member order by id_member desc ");
$n=mysql_num_rows($d);
while ($r=mysql_fetch_array($d))
{
	$koment=mysql_num_rows(mysql_query("select * from komen where username='$r[username]'"));
	$no++;
	echo "<tr><td><span>$no.<img src='image/b_usradd.png'><a href=#>$r[email]</a></span>"; 
	if ($_SESSION[namauser] == 'aangnaja77')
	{ 
	echo "|koment $koment| <a href='member/hapus_member.php?id=$r[id_member]'><img src=image/b_drop.png></a>";
	} 
	echo "</td></tr>";	

}
?>