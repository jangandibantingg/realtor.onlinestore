<?php
include "../../config/koneksi.php";
mysql_query("delete from kontak where id_kontak='$_GET[id]'");
header("location:../?read=komen");

?>