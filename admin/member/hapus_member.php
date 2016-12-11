<?php
include "../../config/koneksi.php";
mysql_query("delete from member where id_member='$_GET[id]'");
header("location:../?read=member");

?>