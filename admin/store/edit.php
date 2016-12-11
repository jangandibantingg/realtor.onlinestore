
<?php

$r=mysql_fetch_array(mysql_query("select * from posting where id_posting='$_GET[id]'"));
echo"
<form method=post action=topik/update_berita.php  enctype='multipart/form-data'>
<img src=../gambar/$r[gambar] /><br>
$r[gambar]<br>
<input name=judul placeholder='type rumah' type=text value='$r[judul]'><br>
<input name=kategori type=hidden value='2' >
<input name=email type=hidden value=$_SESSION[member] >
<input name=harga type=text placeholder='harga' value='$r[harga]'><br>
<input name=luas type=text placeholder='luas rumah' value='$r[luas]'><br>
<input name=alamat type=text placeholder='alamat' value='$r[alamat]'><br>
<input name=tahun type=text placeholder='tahun' value='$r[tahun]'><br>
<input name=read type=hidden value='$_GET[read]'><br>
<input type=file name=fupload><br>
<textarea name='isi_posting' id='travaweb' style='width: 600px; height: 350px;'>$r[isi_posting]</textarea></br>
<input type='hidden' value='$_GET[id]' name=id>
<button type='submit'>simpan</button>
</form>";

?>