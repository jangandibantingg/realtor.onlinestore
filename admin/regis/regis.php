<?php
include "../../config/koneksi.php";
	   $cari=mysql_num_rows(mysql_query("select * from member where email='$_POST[email]'"));
	   if (empty($_POST[email]))
	   {
	   header ("location:../?read=regis&email=wrongway");    
	   }
	   elseif ($cari > 0 )
	   {
		header ("location:../?read=regis&email=wrong"); 
	   }
	   else
	   {
		$email=$_POST[email];
		$username=explode("@",$email);
		mysql_query("insert into member (email,password,username) VALUES ('$_POST[email]','$_POST[password]','".$username[0]."')");
		$login=mysql_query("SELECT * FROM member WHERE email='$_POST[email]' AND password='$_POST[password]' ");
		$ketemu=mysql_num_rows($login);
		$r=mysql_fetch_array($login);
		if ($ketemu > 0){
		session_start();
		$_SESSION[member]    = $r[email];
		$_SESSION[namauser]    = $r[username];
		}
		header ("location:../?read=home");
	   }
?>