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
				
            <form action="?page=laporan_penilaian_admin" method="post">
 	        <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr valign="top">
              <td><!--  start step-holder -->
                <!--  end step-holder -->
                  <!-- start id-form -->
                  <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
                    <tr>
                      <th valign="top">Guru</th>
                      <td><select name="id_guru"  class="styledselect_form_1">
                      <option value="0">-- Pilih Guru --</option>
                      <?php
					  $guru=mysql_query("select * from data_guru order by nama_guru asc");
					  while($row1=mysql_fetch_array($guru)){
					  ?>
                          <option value="<?php echo $row1['id_guru'];?>"><?php echo $row1['nama_guru'];?> [ <?php echo $row1['nip'];?> ] </option>
					  <?php
					  }
					  ?>                          
                          
                        </select>
                      </td>
                      <td></td>
                    </tr>
                    
                     <tr>
                      <th valign="top">Siswa</th>
                      <td><select name="id_siswa"  class="styledselect_form_1">
                      <option value="0">-- Pilih Siswa --</option>
                      <?php
					  $siswa=mysql_query("select * from data_siswa order by nama_siswa asc");
					  while($row4=mysql_fetch_array($siswa)){
					  ?>
                          <option value="<?php echo $row4['id_siswa'];?>"><?php echo $row4['nama_siswa'];?> [ <?php echo $row4['nis'];?> ] </option>
					  <?php
					  }
					  ?>                          
                          
                        </select>
                      </td>
                      <td></td>
                    </tr>
                    
                    
                    <tr>
                      <th valign="top">Pelajaran</th>
                      <td><select name="id_pelajaran"  class="styledselect_form_1">
					  <option value="0">-- Pilih Pelajaran --</option>
                          <?php
						  $pelajaran=mysql_query("select * from setup_pelajaran order by nama_pelajaran asc");
						  while($row2=mysql_fetch_array($pelajaran)){
						  ?>
							  <option value="<?php echo $row2['id_pelajaran'];?>"><?php echo $row2['nama_pelajaran'];?></option>
						  <?php
						  }
						  ?>    
  
                        </select>
                      </td>
                      <td></td>
                    </tr>
                    
                    <tr>
                      <th valign="top">Kelas</th>
                      <td><select name="id_kelas"  class="styledselect_form_1">
						  <option value="0">-- Pilih Kelas --</option>
                          <?php
						  $kelas=mysql_query("select * from setup_kelas order by nama_kelas asc");
						  while($row3=mysql_fetch_array($kelas)){
						  ?>
							  <option value="<?php echo $row3['id_kelas'];?>"><?php echo $row3['nama_kelas'];?></option>
						  <?php
						  }
						  ?>    
  
                        </select>
                      </td>
                      <td></td>
                    </tr>
                    
                    <tr>
                      <th>&nbsp;</th>
                      <td valign="top"><input type="submit" name="submit" value="Filter Data" class="form-filter" />
                      </td>
                      <td></td>
                    </tr>
                  </table>
                <!-- end id-form  -->
              </td>
              <td><!--  start related-activities -->
              </td>
            </tr>
            <tr>
              <td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
              <td></td>
            </tr>
        	</table>
			</form>
            
            
            
				<!--  start product-table ..................................................................................... -->				<p align="right"><a href="print_padmin.php" target="_blank"><b><i> >> Print Laporan Penilaian << </i></b></a></p>
                <br />
				
                <div id="customers">
                <table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
				<tr>
					<th width="2%" class="table-header-check"><a id="toggle-all" ></a> </th>
                  <th width="4%" class="table-header-repeat line-left minwidth-1"><a href="">Nomor</a></th>
					<th width="12%" class="table-header-repeat line-left minwidth-1"><a href="">Nama Siswa</a></th>
				  <th width="10%" class="table-header-repeat line-left minwidth-1"><a href="">NIS</a></th>
                    <th width="16%" class="table-header-repeat line-left minwidth-1"><a href="">Nama Guru</a></th>
					<th width="11%" class="table-header-repeat line-left minwidth-1"><a href="">NIP</a></th>
				  <th width="10%" class="table-header-repeat line-left"><a href="">Kelas</a></th>
				  <th width="26%" class="table-header-repeat line-left"><a href="">Mata Pelajaran</a></th>
				  <th width="9%" class="table-header-options line-left"><a href="">Nilai</a></th>
				</tr>
                
                <?php
				
				$filter_guru="";
				$filter_kelas="";
				$filter_pelajaran="";
				$filter_siswa="";
				
				if(isset($_POST['submit'])){
					
					$id_guru=htmlentities($_POST['id_guru']);
					$id_siswa=htmlentities($_POST['id_siswa']);
					$id_pelajaran=htmlentities($_POST['id_pelajaran']);
					$id_kelas=htmlentities($_POST['id_kelas']);
					
					
					if($id_guru!=="0"){
						$filter_guru="and nilai.id_guru='$id_guru'";
					}else{
						$filter_guru="";
					}
					
					if($id_siswa!=="0"){
						$filter_siswa="and nilai.id_siswa='$id_siswa'";
					}else{
						$filter_siswa="";
					}
					
					if($id_pelajaran!=="0"){
						$filter_pelajaran="and nilai.id_pelajaran='$id_pelajaran'";
					}else{
						$filter_pelajaran="";
					}
					
					if($id_kelas!=="0"){
						$filter_kelas="and nilai.id_kelas='$id_kelas'";
					}else{
						$filter_kelas="";
					}
					
				}else{
					unset($_POST['submit']);
				}
				
				
				$view=mysql_query("SELECT nama_siswa, nis, nama_guru, nip, nama_kelas, nama_pelajaran, nilai FROM tbl_nilai nilai, data_siswa siswa, setup_pelajaran pelajaran, setup_kelas kelas, data_guru guru WHERE nilai.id_siswa=siswa.id_siswa and nilai.id_kelas=kelas.id_kelas and nilai.id_pelajaran=pelajaran.id_pelajaran and nilai.id_guru=guru.id_guru $filter_guru $filter_siswa $filter_pelajaran $filter_kelas order by siswa.nama_siswa asc");

				$i = 1;
				while($row=mysql_fetch_array($view)){
					?>
					<tr>
						<td><input type="checkbox" /></td>
                        <td><?php echo $i;?></td>
						<td><?php echo $row['nama_siswa'];?></td>
						<td><?php echo $row['nis'];?></td>
                        <td><?php echo $row['nama_guru'];?></td>
						<td><?php echo $row['nip'];?></td>
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
                </div>
                <br />
    			<p align="right"><a onclick="javascript:demoFromHTML();">PDF</a></p>
                <p align="right"><a onclick="window.print();">PDF</a></p>
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