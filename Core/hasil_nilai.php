<?php

include "conn.php";

?>

<!--  start page-heading -->
<div id="page-heading">
    <h1>Hasil Nilai</h1>
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

      	<!--  start product-table ..................................................................................... -->
	
    	<?php
		
		$id_siswa=$_SESSION['id_siswa'];
		$siswa=mysql_fetch_array(mysql_query("select siswa.nama_siswa, siswa.nis, kelas.nama_kelas from tbl_ruangan ruangan, data_siswa siswa, setup_kelas kelas where ruangan.id_siswa=siswa.id_siswa and ruangan.id_siswa='$id_siswa' and ruangan.id_kelas=kelas.id_kelas"));
		
		$nama_siswa=$siswa['nama_siswa'];
		$nis=$siswa['nis'];
		$nama_kelas=$siswa['nama_kelas'];
		
		?>
    
    
        <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
        <tr>
          <th valign="top">Nama Siswa</th>
          <td><input type="text" class="inp-form" name="nama_siswa" value="<?php echo $nama_siswa;?>" disabled="disabled"/></td>
          <td></td>
        </tr>
         <tr>
          <th valign="top">NIS</th>
          <td><input type="text" class="inp-form" name="nama_siswa" value="<?php echo $nis;?>" disabled="disabled"/></td>
          <td></td>
        </tr>
        <tr>
          <th valign="top">Kelas</th>
          <td><input type="text" class="inp-form" name="nis" value="<?php echo $nama_kelas;?>" disabled="disabled"/></td>
          <td></td>
        </tr>
      </table>
      <br />
      
        <form id="mainform" action="home.php?page=input_nilai_siswa" method="post">
        <table border="0" width="48%" cellpadding="0" cellspacing="0" id="product-table">
        <tr>
            <th width="10%" class="table-header-repeat line-left minwidth-1"><a href="">Nomor</a></th>
            <th width="60%" class="table-header-repeat line-left minwidth-1"><a href="">Nama Pelajaran</a></th>
            <th width="30%" class="table-header-repeat line-left minwidth-1"><a href="">Nilai</a></th>
        </tr>
        
        
        <?php
		$view=mysql_query("SELECT nama_pelajaran, nilai FROM tbl_nilai nilai, setup_pelajaran pelajaran WHERE nilai.id_siswa='$id_siswa' and nilai.id_pelajaran=pelajaran.id_pelajaran order by pelajaran.nama_pelajaran asc");
		
		$i = 1;
		while($row=mysql_fetch_array($view)){
			?>
			<tr>
				<td><?php echo $i;?></td>
				<td><?php echo $row['nama_pelajaran'];?></td>
				<td><?php echo $row['nilai'];?></td>
			</tr>
			<?php
			$i++;
			
			$nilai=$row['nilai'];
			
			$total=$total+$nilai;
			
		}
		?>
        <tr>
            <td colspan="2" align="center"><b>Total Nilai</b></td>
            <td><?php echo $total;?></td>
        </tr>
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
