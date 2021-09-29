<?php
include "conn.php";

if(isset($_POST['submit'])){
	
	$id_siswa=ucwords(htmlentities($_POST['id_siswa']));
	$id_pelajaran=htmlentities($_POST['id_pelajaran']);
	$nilai=htmlentities($_POST['nilai']);
	
	$query=mysql_query("insert into setup_nilai values('','$id_siswa','$id_pelajaran','$nilai')");
	
	if($query){
		?><script language="javascript">document.location.href="?page=data_nilai&status=1";</script><?php
	}else{
		?><script language="javascript">document.location.href="?page=data_nilai&status=2";</script><?php
	}
	
}else{
	unset($_POST['submit']);
}


?>

<!--  start page-heading -->
<div id="page-heading">
    <h1>Data Nilai</h1>
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
                <td class="green-left">Data Berhasil disimpan</td>
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
                <td class="red-left">Data Gagal disimpan</td>
                <td class="red-right"><a class="close-red"><img src="images/table/icon_close_red.gif"   alt="" /></a></td>
            </tr>
            </table>
            </div>
            
			<?php
			}
			?>
    
    		<form action="?page=data_nilai" method="post">
 	        <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr valign="top">
              <td><!--  start step-holder -->
                <!--  end step-holder -->
                  <!-- start id-form -->
                  <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
                    <tr>
                      <th valign="top">Nama Siswa </th>
                      <td><select name="id_siswa"  class="styledselect_form_1">

                          <?php
						  $namas=mysql_query("select * from data_siswa order by id_siswa asc");
						  while($row2=mysql_fetch_array($namas)){
						  ?>
							  <option value="<?php echo $row2['id_siswa'];?>"><?php echo $row2['nama_siswa'];?></option>
						  <?php
						  }
						  ?>    
  
                        </select></td>
                      <td></td>
                    </tr>
                    
                    <tr>
                      <th valign="top">Mata Pelajaran</th>
                      <td><select name="id_pelajaran"  class="styledselect_form_1">

                          <?php
						  $pelajaran=mysql_query("select * from setup_pelajaran order by id_pelajaran asc");
						  while($row2=mysql_fetch_array($pelajaran)){
						  ?>
							  <option value="<?php echo $row2['id_pelajaran'];?>"><?php echo $row2['nama_pelajaran'];?></option>
						  <?php
						  }
						  ?>    
  
                        </select></td>
                      <td></td>
                    </tr>
                    
                     <tr>
                      <th valign="top">status</th>
                      <td><input type="text" class="inp-form" name="status" placeholder="Ini harus diisi!" onKeyPress="return goodchars(event,'0123456789',this)" required/></td>
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


      	<!--  start product-table ..................................................................................... -->
        <form id="mainform" action="">
        <table border="0" width="100%" cellpadding="0" cellspacing="0" id="product-table">
        <tr>
            <th width="5%" class="table-header-repeat line-left minwidth-1"><a href="">Nomor</a>	</th>
            <th width="15%" class="table-header-repeat line-left minwidth-1"><a href="">Nama Siswa</a></th>
            <th width="7%" class="table-header-repeat line-left minwidth-1"><a href="">NIS</a></th>
            <th width="7%" class="table-header-repeat line-left minwidth-1"><a href="">Mata Pelajaran</a></th> 
            <th width="9%" class="table-header-repeat line-left minwidth-1"><a href="">Nilai</a></th>
            <th width="5%" class="table-header-repeat line-left minwidth-1"><a href="">Aksi</a></th>
        </tr>
        
        
        <?php
		$view=mysql_query("SELECT * FROM setup_nilai, data_siswa, setup_pelajaran WHERE setup_nilai.id_siswa=data_siswa.id_siswa and setup_nilai.id_pelajaran=setup_pelajaran.id_pelajaran order by data_siswa.nama_siswa asc");
		
		$no=0;
		while($row=mysql_fetch_array($view)){
		?>	
		<tr>
            <td><?php echo $no=$no+1;?></td>
            <td><?php echo $row['nama_siswa'];?></td>
            <td><?php echo $row['nis'];?></td>
            <td><?php echo $row['nama_pelajaran'];?></td>
            <td><?php echo $row['nilai'];?></td>
            <td class="options-width">
           
            <a href="?page=edit_siswaf2&id=<?php echo $row['id_siswa']; ?>" title="Update Status" class="icon-5 info-tooltip"></a>            
            </td>
        </tr>
		<?php
		}
		?>
        </table>
        <!--  end product-table................................... --> 
        </form>
		
        
        
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
