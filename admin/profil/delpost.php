<?php
include "../../config/koneksi.php";
mysql_query("delete from posting where id_posting='$_GET[id]'");
header("location:../?read=profil");

?>