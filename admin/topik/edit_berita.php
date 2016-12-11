
<?php

$r=mysql_fetch_array(mysql_query("select * from posting where id_posting='$_GET[id]'"));
echo"
<form method=post action=topik/update_berita.php  enctype='multipart/form-data'>
<img src=../gambar/$r[gambar] /><br>
$r[gambar]<br>
<input name=judul type=text value='$r[judul]'>
<select name=kategori >  ";
 $tampil=mysql_query("SELECT * FROM kategori ORDER BY nama_kategori");
          if ($r[id_kategori]==0){
            echo "<option value=0 selected>- Pilih Kategori -</option>";
          }   

          while($w=mysql_fetch_array($tampil)){
            if ($r[id_kategori]==$w[id_kategori]){
              echo "<option value=$w[id_kategori] selected>$w[nama_kategori]</option>";
            }
            else{
              echo "<option value=$w[id_kategori]>$w[nama_kategori]</option>";
            }
          }

    echo "</select><input type=file name='fupload'>
<textarea name='isi_posting' id='travaweb' style='width: 600px; height: 350px;'>$r[isi_posting]</textarea></br>
<input type='hidden' value='$_GET[read]' name=read>
<input type='hidden' value='$_GET[id]' name=id>
<button type='submit'>simpan</button>
</form>";

?>