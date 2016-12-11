<?php
include "../../config/koneksi.php";
mysql_query("delete from mirror where id_mirror='$_GET[id]'");
header("location:../?read=link");

?>