<?php
		error_reporting(0);
		session_start();

 
		$_SESSION['KCFINDER']=array();
		$_SESSION['KCFINDER']['disabled'] = false;
		$_SESSION['KCFINDER']['uploadURL'] = "../tinymcpuk/gambar";
		$_SESSION['KCFINDER']['uploadDir'] = "";
		include "../config/koneksi.php";
		if ($_SESSION[member] == null )
		{
		$login=login;
		}
		?>
<?php
		error_reporting(0);
		session_start();

 
		$_SESSION['KCFINDER']=array();
		$_SESSION['KCFINDER']['disabled'] = false;
		$_SESSION['KCFINDER']['uploadURL'] = "../tinymcpuk/gambar";
		$_SESSION['KCFINDER']['uploadDir'] = "";
		include "../config/koneksi.php";
		if ($_SESSION[member] == null )
		{
		$login=login;
		}
		?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- DW6 -->
<head>
<!-- Copyright 2005 Macromedia, Inc. All rights reserved. -->
<title>
<?php 
$ti=mysql_query("select * from posting where judul_seo='$_GET[read]'");
$tir=mysql_fetch_array($ti);
if (mysql_num_rows($ti) > 0)
{
echo "$tir[judul]";	
}
else
{
echo "$_GET[read]";	
}
?>
</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="mm_entertainment.css" type="text/css" />
<link rel="shortcut icon" type="image/x-icon" href="../gambar/favicon.ico">
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.5/angular.min.js"></script>
<!--webfont -->
<script src="../tinymcpuk/jscripts/tiny_mce/tiny_mce.js" type="text/javascript"></script>
<script src="../tinymcpuk/jscripts/tiny_mce/tiny_travaweb.js" type="text/javascript"></script>

</head>
<body >
<div align="center">
<table width="550" border="0" cellspacing="0" cellpadding="0" bgcolor="#E6E7E8">
  <tr bgcolor="#0098DA">
    <td colspan="2" rowspan="2" nowrap="nowrap"><span class="sidebarHeader" style="color: #ffffff;" ><img src="../gambar/logo.png">  </span></td>
    <td height="58" nowrap="nowrap" colspan="2" id="logo" valign="bottom"><span class="style2">&nbsp;</span></td>
    <td width="5">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="5" bgcolor=""></td>
  </tr>


   


  <tr>
   <td width="4" valign="top">&nbsp;</td>
   <td colspan="2" valign="top"> <p >
		<?php if ($_SESSION[member]) { ?><a href="?read=home"><img src="image/b_home.png" />beranda</a><?php } ?>
		<?php if ($_SESSION[member]) { ?><a href="?read=store"><img src="image/new_struct.png" /> store</a><?php } ?>
		<?php if ($_SESSION[member]) { ?><?php echo "<a href=?read=addstore><img src=image/b_group.png> posting rumah</a> ";?><?php } ?>
		<?php if ($_SESSION[member]) { ?><?php echo "<a href=?read=addberita><img src=image/b_group.png> posting berita</a> ";?><?php } ?>
		<?php if ($_SESSION[member]) { ?><?php echo "<a href=?read=komen><img src=image/b_comment.png> kontak</a> ";?><?php } ?>
		<?php if ($_SESSION[member]) { ?><?php echo "<img src='image/b_usradd.png' />$_SESSION[namauser] ";?><?php } ?>
		<?php if ($_SESSION[member]) { ?><a href="logout/logout.php"><img src="image/b_close.png" />logout</a><?php } ?>
        </p>
	<table border="0" cellspacing="0" cellpadding="2" width="550">
        <?php
		
		if($_GET[login] == 'fals')
		{
		echo "<tr bgcolor=#ff0000><td><p><span style='font-family: andale mono,times; font-size: small; color: #ffffff;'><b>username atau password yang anda masukan salah</b></span></p></td></tr>";	
		}
		if ($login == 'login'  )
		{
		echo " <tr> <td> <p style=text-align: right;>
		<form method=post action=login/cek_login.php >
		<input type=text name=email placeholder=email>
		<input type=hidden name=read value=$_GET[read]>
		<input type=password name=password placeholder=password>
		<button type='submit'>login</button> 
		</form> 
		</p> </td>  </tr>";
		}
		if ($_SESSION[member])
		{
		if ($_GET[read]=='logout')
		{
		 echo "<img src='image/b_drop.png' />LOGOUT SUCCSESS!!!";
		}
		elseif ($_GET[read]=='regis')
		{
		echo "<hr>
		<h5>REGISTER | cukup isi email dan password</h5>
		<form  action='regis/regis.php' method='POST'>
		<input type=text name=email placeholder=email >
		<input type=password name=password placeholder=password >
		<button type=submit >register</button>";
		if ($_GET[email] == 'wrong')
		{
		echo"<p> email anda sudah terdaftar <a href='?read=login'>klik Login!!!</a>
		</form>		
		";
		}
		if ($_GET[email] == 'wrongway')
		{
		echo"<p><span style='color: #ff0000;'>*isi data dengan lengkap</span></p></a>
		</form>		
		";
		}	
		}
		elseif ($_GET[read]== 'home')
		{
		include "home/home.php";
		}
		
		elseif ($_GET[read] == 'addstore')
		{
		include "store/add.php";
		}
		
		elseif ($_GET[read]=='addberita')
		{
		include "topik/tambah_berita.php";
		}
		elseif ($_GET[read]=='editberita')
		{
		include "topik/edit_berita.php";
		}
		elseif ($_GET[read]=='store')
		{
		include "store/store.php";
		}
		elseif ($_GET[read]=='editrumah')
		{
		include "store/edit.php";
		}
		elseif ($_GET[read]=='komen')
		{
		include "komen/komen.php";
		}
		elseif ($_GET[read]=='member')
		{
		include "member/member.php";
		}
		else
		{
		include "topik/new.php";
		}
		}
		?>
		
        <tr>
          <td class="detailText" valign="top"><p><strong></p></td>
        </tr>
		
    </table>
	</td>
	</tr>
    <tr bgcolor="#0098DA">
    <td colspan="2" rowspan="2" nowrap="nowrap">&nbsp; 
     <p><span style="color: #ffffff;">&nbsp travaweb&nbsp;&copy; 2015</span></p>
    </p></td>
    <td height="58" nowrap="nowrap" colspan="2" id="logo" valign="bottom"><span class="style2">&nbsp;</span></td>
    <td width="5">&nbsp;</td>
    </tr>
</table>
</div>
<br />
</body>
</html>
