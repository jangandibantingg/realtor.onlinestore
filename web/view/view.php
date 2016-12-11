<div class="gallery">
 <?php 
$d=mysql_query("select * from posting where judul_seo='$_GET[read]'");
$r=mysql_fetch_array($d);
$harga=number_format($r[harga]);
echo "
<h4>$r[judul]</h4>";

if ($r[id_kategori] == '2')
{
echo "<img  src='../gambar/$r[gambar]'>";
echo "<p>  &nbsp harga : IDR $harga<br>";
echo " &nbsp luas : $r[luas] <br>";
echo " &nbsp tahun pembuatan : $r[tahun]<br><br >


";


}

echo "<p>$r[isi_posting]</p>"; 
 
 
 
?>
 </div>