<?php
$name=$_POST[name];
$telpon=$_POST[phone];
$email=$_POST[email];
$pesan=$_POST[pesan];

if ($_POST[submitpesan] && $name != null && $telpon !=null && $email !=null && $pesan !=null)
{
mysql_query("insert into kontak (name,email,telpon,komentar) values ('$name','$email','$telpon','$pesan')");	
$sukses=1;
}
else
{
$sukses=2;	
}

?>


<div class="gallery">
<?php 
if ($sukses== 1) 
{ echo "<span style=color:green;>Pesan terkirim tunggu team kami menghubungi anda</span>";} 
elseif ($sukses == 2)  
{
echo "<span style=color:red;>Masukan  data dengan lengkap</span>";	
}
else
{
echo "";	
}

?>
<form action="<?php echo $PHP_SELF ?>" method="POST"> 
              <fieldset id="user-details">	
			<label for="name">Name:</label>
			<input type="text" name="name" value="" /> 
		    <label for="email">Email:</label> 
			<input type="email" name="email" value=""  /> 
	        <label for="phone">Phone:</label> 
			<input type="text" name="phone" value=""  /> 
	        <label for="website">Your Massage</label> 
			<input type="text" name="pesan" value=""  /> 
           <input type="submit" value="Submit Message" name="submitpesan" class="submit" />	
	     </fieldset><!--end user-details-->
	   
</form>
</div>