
<?php

echo"
<form method='post'  action=topik/aksi_berita.php enctype='multipart/form-data' >
<input name=judul type=text placeholder='judul posting' >
<input name=email type=hidden value=$_SESSION[member]  >
<input name=kategori type=hidden value=6  >";
echo " </select><input type=file name=fupload>
<textarea name='isi_berita' id='travaweb' style='width: 600px; height: 350px;'></textarea></br>
<button type='submit'>simpan</button>
</form>";

?>
   