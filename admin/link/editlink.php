
<?php

$r=mysql_fetch_array(mysql_query("select * from mirror where id_mirror='$_GET[id]'"));
echo"
<form method=post action=topik/update_berita.php  enctype='multipart/form-data'>
$r[gambar]<br>

<select name=kategori >  ";
 $tampil=mysql_query("SELECT * FROM posting where id_kategori='3' ");
          if ($r[id_posting]==0){
            echo "<option value=0 selected>- Pilih judul -</option>";
          }   

          while($w=mysql_fetch_array($tampil)){
            if ($r[id_posting]==$w[id_posting]){
              echo "<option value=$w[id_posting] selected>$w[judul]</option>";
            }
            else{
              echo "<option value=$w[id_posting]>$w[judul]</option>";
            }
          }

    echo "</select><br>
<input name=link type=text value='$r[link]'>
<input type='hidden' value='$_GET[id]' name=id><br>
<button type='submit'>simpan</button>
</form>";

?>