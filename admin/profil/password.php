<?php
include "../../config/koneksi.php";
$pass=$_POST[password];
$pass1=$_POST[repassword1];
$pass2=$_POST[repassword2];
$email=$_POST[email];
$cek=mysql_num_rows(mysql_query("select * from member where email='$email' and password='$pass'"));
	if ($cek == 0)
	{
	echo "<script>alert('password lama yang anda masukan salah'); window.location = '../?read=profil&get=pass'</script>"; 
	}
	elseif($pass1 == $pass2 && $cek == 1 )
	{
	mysql_query("update member set password='$pass1' where email='$email'");
    echo "<script>alert('password berhasil di ubah'); window.location = '../?read=profil&pass=true'</script>"; 		
	}



?>