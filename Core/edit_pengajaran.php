<?php
include 'conn.php';
$id = $_GET['id_jadwal']; //get the no which will updated
$query = "SELECT * FROM tbl_jadwal WHERE id_jadwal = $id"; //get the data that will be updated
$hasil = mysql_query($query);
$row2  = mysql_fetch_array($hasil);
?>

<div id="page-heading">
    <h1>Update Data Pengajaran</h1>
</div>

<form method="post" action="edit_pengajaran2.php">
<table width="500" border="0" cellpadding="2" cellspacing="2" id="id-form">
<tr>
  	<td width="23%"> No </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" class="inp-form" name="id_jadwal" disabled='disable' value="<?php echo $row2['id_jadwal']; ?>"> </td>
  </tr>

<?php
$query = "SELECT * FROM data_guru WHERE id_guru = $row2[id_guru];"; //get the data that will be updated
$hasil = mysql_query($query);
$data4  = mysql_fetch_array($hasil);
?>
  
  
  <input type="hidden" name="id_guru" class="inp-form" value="<?php echo $data4['id_guru']; ?>">
  <tr>
  	<td>Nama Guru</td>
    <td>:</td>
    <td> <input type="text" name="id_guru" class="inp-form" value="<?php echo $data4['nama_guru']; ?>" disabled="disabled"> </td>
  </tr>
  
<?php
$query = "SELECT * FROM setup_pelajaran WHERE id_pelajaran = $row2[id_pelajaran];"; //get the data that will be updated
$hasil = mysql_query($query);
$data3  = mysql_fetch_array($hasil);
?>
  
  
  <input type="hidden" name="id_pelajaran" class="inp-form" value="<?php echo $data3['id_pelajaran']; ?>">
  <tr>
  	<td>Mata Pelajaran</td>
    <td>:</td>
    <td> <input type="text" name="id_pelajaran" class="inp-form" value="<?php echo $data3['nama_pelajaran']; ?>" disabled="disabled"> </td>
  </tr>
  
  <tr>
   <td valign="top">Kelas</td>
      <td width="2%">:</td>
      <td><select name="id_kelas"  class="styledselect_form_1">

            <?php
						  $kls=mysql_query("select * from setup_kelas order by id_kelas asc");
						  while($kls2=mysql_fetch_array($kls)){
						  ?>
							  <option value="<?php echo $kls2['id_kelas'];?>" <?php if ($row2['id_kelas']==$kls2['id_kelas']){echo'selected="selected"';} ?>><?php echo $kls2['nama_kelas'];?></option>
						  <?php
						  }
						  ?>    
  
            </select></td>
  </tr>
  
<?php
$query = "SELECT * FROM tbl_jadwal WHERE id_jadwal = $id"; //get the data that will be updated
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
?>
  
  <tr>
	<td>Status</td>
    <td>:</td>
    <td><select name="status" class="styledselect_form_1" >
		  <option value="Aktif" <?php if ($data['status']=="Aktif"){echo'selected="selected"';} ?>>Aktif</option>
          <option value="Tidak Aktif" <?php if ($data['status']=="Tidak Aktif"){echo'selected="selected"';} ?>>Tidak Aktif</option>
		</select>
	</td>
  </tr>
  
  <tr>
  	<td>Jam</td>
    <td>:</td>
    <td> <input type="text" name="jam" class="inp-form" value="<?php echo $data['jam']; ?>"> </td>
  </tr>

  <tr>
	<td>Hari</td>
    <td>:</td>
    <td><select name="hari" class="styledselect_form_1" >
		    <option value="Senin" <?php if ($data['hari']=="Senin"){echo'selected="selected"';} ?>>Senin</option>
          <option value="Selasa" <?php if ($data['hari']=="Selasa"){echo'selected="selected"';} ?>>Selasa</option>
          <option value="Rabu" <?php if ($data['hari']=="Rabu"){echo'selected="selected"';} ?>>Rabu</option>
          <option value="Kamis" <?php if ($data['hari']=="Kamis"){echo'selected="selected"';} ?>>Kamis</option>
          <option value="Jumat" <?php if ($data['hari']=="Jumat"){echo'selected="selected"';} ?>>Jumat</option>
          <option value="Sabtu" <?php if ($data['hari']=="Sabtu"){echo'selected="selected"';} ?>>Sabtu</option>
		</select>
	</td>
  </tr>

<tr>
  	<td></td> <td></td> <td> <input type="hidden" name="id_j" value="<?php echo $data['id_jadwal']; ?>">
  	<input type="SUBMIT" name="submit" value="Save" class="form-submit">
    <input name="kembali" type="button" class="form-kembali" id="SUMBIT" onclick="history.back();" value="Kembali"></td>
  </tr>
</table>
</form>