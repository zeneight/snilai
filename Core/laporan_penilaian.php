<!--  start page-heading -->
	<div id="page-heading">
		<h1>Laporan Penilaian</h1>
	</div>
	<!-- end page-heading -->

	<table border="0" width="100%" cellpadding="0" cellspacing="0" id="content-table">
	<tr>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowleft.jpg" width="20" height="300" alt="" /></th>
		<th class="topleft"></th>
		<td id="tbl-border-top">&nbsp;</td>
		<th class="topright"></th>
		<th rowspan="3" class="sized"><img src="images/shared/side_shadowright.jpg" width="20" height="300" alt="" /></th>
	</tr>
	<tr>
		<td id="tbl-border-left"></td>
		<td>
		<!--  start content-table-inner ...................................................................... START -->
		<div id="content-table-inner">
		
			<!--  start table-content  -->
			<div id="table-content">
			
				<!--  start product-table ..................................................................................... -->
				<table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th width="3%" class="table-header-check"><a id="toggle-all" ></a> </th>
                    <th width="4%" class="table-header-repeat line-left minwidth-1"><a href="">Nomor</a></th>
					<th width="24%" class="table-header-repeat line-left minwidth-1"><a href="">Nama Siswa</a>	</th>
					<th width="15%" class="table-header-repeat line-left minwidth-1"><a href="">NIS</a></th>
					<th width="10%" class="table-header-repeat line-left"><a href="">Kelas</a></th>
					<th width="32%" class="table-header-repeat line-left"><a href="">Mata Pelajaran</a></th>
				  <th width="12%" class="table-header-options line-left"><a href="">Nilai</a></th>
				</tr>
                
                <?php
				$id_guru=$_SESSION['id_guru'];
				$view=mysql_query("SELECT * FROM tbl_nilai nilai, data_siswa siswa, setup_pelajaran pelajaran, setup_kelas kelas WHERE nilai.id_siswa=siswa.id_siswa and nilai.id_kelas=kelas.id_kelas and nilai.id_pelajaran=pelajaran.id_pelajaran and nilai.id_guru='$id_guru' order by siswa.nama_siswa asc");
				
				$i = 1;
				while($row=mysql_fetch_array($view)){
					?>
					<tr>
						<td><input type="checkbox" /></td>
                        <td><?php echo $i;?></td>
						<td><?php echo $row['nama_siswa'];?></td>
						<td><?php echo $row['nis'];?></td>
						<td><?php echo $row['nama_kelas'];?></td>
                        <td><?php echo $row['nama_pelajaran'];?></td>
                        <td><?php echo $row['nilai'];?></td>
					</tr>
					<?php
					$i++;
				}
					$jumSis = $i-1;
				?>
 
                
                
				</table>
				<!--  end product-table................................... --> 

			</div>
			<!--  end content-table  -->
		
			<div class="clear"></div>
		 
		</div>
		<!--  end content-table-inner ............................................END  -->
		</td>
		<td id="tbl-border-right"></td>
	</tr>
	<tr>
		<th class="sized bottomleft"></th>
		<td id="tbl-border-bottom">&nbsp;</td>
		<th class="sized bottomright"></th>
	</tr>
	</table>
	<div class="clear">&nbsp;</div>

</div>
<!--  end content -->
<div class="clear">&nbsp;</div>
</div>
<!--  end content-outer........................................................END -->

<div class="clear">&nbsp;</div>