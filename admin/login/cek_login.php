<?php
  include "../../config/koneksi.php";

 

function anti_injection($data){
  $filter = mysql_real_escape_string(stripslashes(strip_tags(htmlspecialchars($data,ENT_QUOTES))));
  return $filter;
}

        $read=$_POST[read];
		
		$login=mysql_query("SELECT * FROM member WHERE email='$_POST[email]' AND password='$_POST[password]' ");
		$ketemu=mysql_num_rows($login);
		$r=mysql_fetch_array($login);
		if ($ketemu > 0){
		session_start();
		$_SESSION[member]    = $r[email];
		$_SESSION[namauser]  = $r[username];
		header ("location:../?read=".$read."&login=true");
		}
		elseif($ketemu == 0)
		{
		 header ("location:../?read=".$read."&login=fals");
		}

?>
  			