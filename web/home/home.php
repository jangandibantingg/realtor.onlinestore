<div class="gallery">
					<h4>Dream Home</h4>
					
					<?php
					$style=0;
					$d=mysql_query("select * from posting where id_kategori='2' order by id_posting desc limit 9");
					while ($r=mysql_fetch_array($d))
					{
					$harga=number_format($r[harga]);
				   //penyesusaian style gambar
					if ($style == 0 )	
					{
					$style=1;
					}
					elseif ($style == 1 )
					{
					$style=2;	
					}
					elseif ($style == 2 )
					{
					$style=3;	
					}
					elseif ($style == 3 )
					{
					$style=1;	
					}
					else
					{
					$style=0;	
					}
					
					
					?>
					<div <?php if ($style == 2 ) { ?> style="margin:0px 25px;margin-top: 10px;" <?php } ?> class="grid">
						<img src="../gambar/<?php echo "$r[gambar]";?>" title="img1"/>
						<ul>
							<li><p>Property Type:</p>
							<a href="#"><?php echo $r[judul] ?></a></li>
							<li><p>Land Area:</p>
							<a href="#"><?php echo $r[luas] ?></a></li>
							<li><p>Year of the Built:</p>
							<a href="#"><?php echo $r[tahun] ?></a></li>
							<li><p>Address:</p>
							<a href="#"><?php echo $r[alamat] ?></a></li>
						</ul>
						<div class="clear"> </div>
						<div class="price">
							<h3> <?php echo $harga ?></h3>
							<a href="halaman.php?read=<?php echo $r[judul_seo] ?>">Details</a>
							<div class="clear"> </div>
						</div>
					</div>
		
		<?php 
					}
		?>
					<div class="clear"></div>
					<div class="all">
						<a href="#">See all</a>
					</div>
				</div>