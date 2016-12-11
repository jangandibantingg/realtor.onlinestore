<?php
error_reporting(0);
include "../../config/koneksi.php";
include "../../config/seo.php";

function UploadImage($fupload_name){
  //direktori gambar
  $vdir_upload = "../../gambar/";
  $vfile_upload = $vdir_upload . $fupload_name;
  $tipe_file   = $_FILES['fupload']['type'];

  //Simpan gambar dalam ukuran sebenarnya
  move_uploaded_file($_FILES["fupload"]["tmp_name"], $vfile_upload);

  //identitas file asli  
  if ($tipe_file=="image/jpeg" ){
      $im_src = imagecreatefromjpeg($vfile_upload);
      }elseif ($tipe_file=="image/png" ){
      $im_src = imagecreatefrompng($vfile_upload);
      }elseif ($tipe_file=="image/gif" ){
      $im_src = imagecreatefromgif($vfile_upload);
      }elseif ($tipe_file=="image/wbmp" ){
      $im_src = imagecreatefromwbmp($vfile_upload);
    }
  $src_width = imageSX($im_src);
  $src_height = imageSY($im_src);

  //Simpan dalam versi small 110 pixel
  //Set ukuran gambar hasil perubahan
  $dst_width = 350;
  $dst_height = ($dst_width/$src_width)*$src_height;

  //proses perubahan ukuran
  $im = imagecreatetruecolor($dst_width,$dst_height);
  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

  //Simpan gambar
  if ($_FILES["fupload"]["type"]=="image/jpeg" ){
      imagejpeg($im,$vdir_upload . "small_" . $fupload_name);
      }
	  elseif ($_FILES["fupload"]["type"]=="image/png" ){
      imagepng($im,$vdir_upload . "small_" . $fupload_name);
      }
	  elseif ($_FILES["fupload"]["type"]=="image/gif" ){
      imagegif($im,$vdir_upload . "small_" . $fupload_name);
      }
	  elseif($_FILES["fupload"]["type"]=="image/wbmp" ){
      imagewbmp($im,$vdir_upload . "small_" . $fupload_name);
      }
  
  //Hapus gambar di memori komputer
  imagedestroy($im_src);
  imagedestroy($im);
}

  $lokasi_file    = $_FILES['fupload']['tmp_name'];
  $tipe_file      = $_FILES['fupload']['type'];
  $nama_file      = $_FILES['fupload']['name'];
  $acak           = rand(1,99);
  $nama_file_unik = $acak.$nama_file;
  
  
$tanggal=date('Y-m-d');
$judul=$_POST[judul];
$judul_seo=seo_title($_POST[judul]);
$isi_berita=$_POST[isi_berita];
$kategori=$_POST[kategori];
$email=$_POST[email];
$tahun=$_POST[tahun];
$luas=$_POST[luas];
$harga=$_POST[harga];
$alamat=$_POST[alamat];
 if (empty($lokasi_file))
  {
mysql_query("insert into posting (email,judul,judul_seo,id_kategori,isi_posting,tanggal,gambar,alamat,harga,luas,tahun) 
			value 
			('$email','$judul','$judul_seo','$kategori','$isi_berita','$tanggal','logo.png','$alamat','$harga','$luas','$tahun')");
header ("location:../?read=home");
  }
  else
  {
	UploadImage($nama_file_unik);
	mysql_query("insert into posting 
	(email,judul,judul_seo,id_kategori,isi_posting,tanggal,gambar,alamat,harga,luas,tahun) 
	value 
	('$email','$judul','$judul_seo','$kategori','$isi_berita','$tanggal','$nama_file_unik','$alamat','$harga','$luas','$tahun')");
	header ("location:../?read=home");  
	  
  }
?>
