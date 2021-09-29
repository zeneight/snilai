<?php

include "conn.php";

if(isset($_POST['submit'])){
	
	$id_siswa=htmlentities($_POST['id_siswa']);
	$id_kelas=htmlentities($_POST['id_kelas']);
	
	$query=mysql_query("insert into tbl_ruangan values('','$id_siswa','$id_kelas','a')");
	
	if($query){
		?><script language="javascript">document.location.href="?page=jadwal_ruangkelas&status=1";</script><?php
	}else{
		?><script language="javascript">document.location.href="?page=jadwal_ruangkelas&status=2";</script><?php
	}
	
}else{
	unset($_POST['submit']);
}

if(isset($_POST['update'])){
	
	$id_ruangan=htmlentities($_POST['id_ruangan']);
	$status=htmlentities($_POST['status']);
	
	$query=mysql_query("UPDATE tbl_ruangan SET status = '$status' WHERE id_ruangan = '$id_ruangan'");
	
	if($query){
		?><script language="javascript">document.location.href="?page=jadwal_ruangkelas&status=1";</script><?php
	}else{
		?><script language="javascript">document.location.href="?page=jadwal_ruangkelas&status=2";</script><?php
	}
	
}else{
	unset($_POST['update']);
}

?>

<!--  start page-heading -->
<div id="page-heading">
    <h1>Ruang Kelas</h1>
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
                <td class="red-left">Data gagal disimpan</td>
                <td class="red-right"><a class="close-red"><img src="images/table/icon_close_red.gif"   alt="" /></a></td>
            </tr>
            </table>
            </div>
            
			<?php
			}
			?>
    
    		<form action="?page=jadwal_ruangkelas" method="post">
 	        <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr valign="top">
              <td><!--  start step-holder -->
                <!--  end step-holder -->
                  <!-- start id-form -->
                  <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
                    <tr>
                      <th valign="top">Siswa</th>
                      <td><select name="id_siswa"  class="styledselect_form_1">
                      
                      <?php
					  $siswa=mysql_query("select * from data_siswa order by nama_siswa asc");
					  while($row1=mysql_fetch_array($siswa)){
					  ?>
                          <option value="<?php echo $row1['id_siswa'];?>"><?php echo $row1['nama_siswa'];?> [ <?php echo $row1['nis'];?> ] </option>
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

                          <?php
						  $kelas=mysql_query("select * from setup_kelas order by nama_kelas asc");
						  while($row2=mysql_fetch_array($kelas)){
						  ?>
							  <option value="<?php echo $row2['id_kelas'];?>"><?php echo $row2['nama_kelas'];?></option>
						  <?php
						  }
						  ?>    
  
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

		    <p><em>*Satu Siswa hanya untuk Satu Ruang Kelas      	    </em>
              <!--  start product-table ..................................................................................... -->
        </p>
		    <p>&nbsp;    </p>
	    
        <table border="0" width="71%" cellpadding="0" cellspacing="0" id="product-table">
        <tr>
            <th width="13%" class="table-header-repeat line-left minwidth-1"><a href="">Nomor</a>	</th>
            <th width="24%" class="table-header-repeat line-left minwidth-1"><a href="">Nama Siswa</a></th>
            <th width="26%" class="table-header-repeat line-left minwidth-1"><a href="">NIS</a></th>
            <th width="24%" class="table-header-repeat line-left minwidth-1"><a href="">Kelas</a></th>
            <th width="13%" class="table-header-options line-left"><a href="">Aksi</a></th>
        </tr>
        
        
        <?php
		$view=mysql_query("select * from tbl_ruangan ruangan, setup_kelas kelas, data_siswa siswa where ruangan.id_kelas=kelas.id_kelas and ruangan.id_siswa=siswa.id_siswa order by id_ruangan asc");
		
		$no=0;
		while($row=mysql_fetch_array($view)){
		?>	
		<tr>
            <td><?php echo $no=$no+1;?></td>
            <td><?php echo $row['nama_siswa'];?></td>
            <td><?php echo $row['nis'];?></td>
            <td><?php echo $row['nama_kelas'];?></td>
            <form method="post" action="?page=jadwal_ruangkelas&status=">
            <td>
            <label>
            <select name="status">
               <option value="a" <?php if ($row['status']=="a"){echo'selected="selected"';} ?> >Aktif</option>
               <option value="ta" <?php if ($row['status']=="ta"){echo'selected="selected"';} ?> >Tidak Aktif</option>
            </select>
            </label>
            <input type="hidden" name="id_ruangan" value="<?php echo $row['id_ruangan'];?>">
            <input type="submit" name="update" value="Rubah">      
            </td>
            </form>
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
