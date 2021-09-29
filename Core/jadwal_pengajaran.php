<?php

include "conn.php";

if(isset($_POST['submit'])){
	
	$id_guru=htmlentities($_POST['id_guru']);
	$id_pelajaran=htmlentities($_POST['id_pelajaran']);
	$id_kelas=htmlentities($_POST['id_kelas']);
	$jam=htmlentities($_POST['jam']);
	$hari=htmlentities($_POST['hari']);

	$query=mysql_query("insert into tbl_jadwal values('','$id_guru','$id_pelajaran','$id_kelas','Aktif','$jam','$hari')");
	
	
	if($query){
		?><script language="javascript">document.location.href="?page=jadwal_pengajaran&status=1";</script><?php
	}else{
		?><script language="javascript">document.location.href="?page=jadwal_pengajaran&status=2";</script><?php
	}
	
	
}else{
	unset($_POST['submit']);
}


?>

<!--  start page-heading -->
<div id="page-heading">
    <h1>Jadwal Pengajaran</h1>
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
    		
            <?php
			if($_GET['status']=='1'){
			?>
			
            <div id="message-green">
            <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td class="green-left">Data berhasil disimpan</td>
                <td class="green-right"><a class="close-green"><img src="images/table/icon_close_green.gif"   alt="" /></a></td>
            </tr>
            </table>
            </div>
            
			<?php
			}
			
			if($_GET['status']=='0'){
			?>

            <div id="message-red">
            <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td class="red-left">Yach data gagal di simpan, cape dechData gagal disimpan</td>
                <td class="red-right"><a class="close-red"><img src="images/table/icon_close_red.gif"   alt="" /></a></td>
            </tr>
            </table>
            </div>
            
			<?php
			}
			?>
    
    		<form action="?page=jadwal_pengajaran" method="post">
 	        <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr valign="top">
              <td><!--  start step-holder -->
                <!--  end step-holder -->
                  <!-- start id-form -->
                  <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
                    <tr>
                      <th valign="top">Guru</th>
                      <td><select name="id_guru"  class="styledselect_form_1">
                      
                      <?php
					  $guru=mysql_query("select * from data_guru order by nama_guru asc");
					  while($row1=mysql_fetch_array($guru)){
					  ?>
					           <option value="#"> - pilih - </option>
                          <option value="<?php echo $row1['id_guru'];?>"><?php echo $row1['nama_guru'];?> [ <?php echo $row1['nip'];?> ] </option>
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
                              <option value="#"> - pilih - </option>

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
                              <option value="#"> - pilih - </option>

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
                      <th valign="top">Jam</th>
                      <td><input type="text" class="inp-form" name="jam" placeholder="Ini harus diisi!" onKeyPress="return goodchars(event,'0123456789',this)" required/></td>
                      <td></td>
                    </tr>
                    
                     <tr>
                      <th valign="top">Hari</th>
                      <td><select name="hari"  class="styledselect_form_1">  
                              <option value="#"> - pilih - </option>                        
							         <option value="Senin">Senin</option>
                              <option value="Selasa">Selasa</option>
                              <option value="Rabu">Rabu</option>
                              <option value="Kamis">Kamis</option>
                              <option value="Jumat">Jumat</option>
                              <option value="Sabtu">Sabtu</option>
                        </select>
                      </td>
                      <td></td>
                    </tr>
                    
                    <tr>
                      <th>&nbsp;</th>
                      <td valign="top"><input type="submit" name="submit" value="" class="form-submit" />
                          <input type="reset" value="" class="form-reset"  />
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

			<p><em>*Tidak boleh 1 Kelas, 1 Pelajaran di ajarkan oleh 2 Guru atau lebih<br /></em> </p>           
			<p>&nbsp;</p>
			  <!--  start product-table ..................................................................................... -->
        <table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
        <tr>
            <th width="13%" class="table-header-repeat line-left minwidth-1"><a href="">Nomor</a>	</th>
            <th width="30%" class="table-header-repeat line-left minwidth-1"><a href="">Nama Guru</a></th>
            <th width="26%" class="table-header-repeat line-left minwidth-1"><a href="">NIP</a></th>
            <th width="26%" class="table-header-repeat line-left minwidth-1"><a href="">Mata Pelajaran</a></th>
            <th width="24%" class="table-header-repeat line-left minwidth-1"><a href="">Kelas</a></th>
            <th width="24%" class="table-header-repeat line-left minwidth-1"><a href="">Jam</a></th>
            <th width="24%" class="table-header-repeat line-left minwidth-1"><a href="">Hari</a></th>
            <th width="24%" class="table-header-repeat line-left minwidth-1"><a href="">Status</a></th>
            <th width="24%" class="table-header-repeat line-left minwidth-1"><a href="">Aksi</a></th>
        </tr>
        
        
        <?php
		$view=mysql_query("select * from tbl_jadwal jadwal, setup_kelas kelas, setup_pelajaran pelajaran, data_guru guru where jadwal.id_kelas=kelas.id_kelas and jadwal.id_pelajaran=pelajaran.id_pelajaran and jadwal.id_guru=guru.id_guru order by id_jadwal asc");
		
		$no=0;
		while($row=mysql_fetch_array($view)){
		?>	
		<tr>
            <td><?php echo $no=$no+1;?></td>
            <td><?php echo $row['nama_guru'];?></td>
            <td><?php echo $row['nip'];?></td>
            <td><?php echo $row['nama_pelajaran'];?></td>
            <td><?php echo $row['nama_kelas'];?></td>
            <td><?php echo $row['jam'];?></td>
            <td><?php echo $row['hari'];?></td>
            <td><?php echo $row['status'];?></td>
            <td class="options-width">
           
            <a href="?page=edit_pengajaran&id_jadwal=<?php echo $row['id_jadwal']; ?>" title="Update Status" class="icon-5 info-tooltip"></a>            
            </td>
        </tr>
		<?php
		}
		?>
        </table>
        <!--  end product-table................................... --> 
		
        
        
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
