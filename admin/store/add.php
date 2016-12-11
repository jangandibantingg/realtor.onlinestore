
<?php

echo"
<form method='post'  action=topik/aksi_berita.php enctype='multipart/form-data' >
<input name=judul type=text placeholder='type ' > 
<input name=kategori type=hidden value='2' >
<input name=email type=hidden value=$_SESSION[member]  >";
echo "<br>
<input name=harga type=text placeholder='harga' ><br>
<input name=luas type=text placeholder='luas rumah' ><br>
<input name=alamat type=text placeholder='alamat' ><br>
<input name=tahun type=text placeholder='tahun' ><br>
<input type=file name=fupload><br>
<textarea name='isi_berita' id='travaweb' style='width: 600px; height: 350px;'></textarea></br>
<button type='submit'>simpan</button>
</form>";

?>
   