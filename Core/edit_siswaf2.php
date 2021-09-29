<?php
include 'conn.php';
$id = $_GET['id']; //get the no which will updated
$query = "SELECT * FROM data_siswa WHERE id_siswa = $id"; //get the data that will be updated
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
?>

<div id="page-heading">
    <h1>Update Data Siswa</h1>
</div>

<form method="post" action="edit_siswa.php">
<table width="500" border="0" cellpadding="2" cellspacing="2" id="id-form">
  <tr>
  	<td width="23%"> No </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" class="inp-form" name="id_siswa" disabled='disable' value="<?php echo $data['id_siswa']; ?>"> </td>
  </tr>

  <tr>
  	<td>Nama siswa</td>
    <td>:</td>
    <td> <input type="text" name="nama_siswa" class="inp-form" value="<?php echo $data['nama_siswa']; ?>"> </td>
  </tr>
  
  <tr>
  	<td>NIS</td>
    <td>:</td>
    <td> <input type="text" name="nis" class="inp-form" value="<?php echo $data['nis']; ?>"> </td>
  </tr>
  
  <tr>
	<td>Kelamin</td>
    <td>:</td>
    <td><select name="kelamin" class="styledselect_form_1">
		  <option value="laki-laki" <?php if ($data['kelamin']=="laki-laki"){echo'selected="selected"';} ?>>Laki-Laki</option>
          <option value="perempuan" <?php if ($data['kelamin']=="perempuan"){echo'selected="selected"';} ?>>Perempuan</option>
		</select>
	</td>
  </tr>
  
  <tr>
  	<td>Alamat</td>
    <td>:</td>
    <td> <input type="text" class="inp-form" name="alamat_siswa" value="<?php echo $data['alamat_siswa']; ?>"> </td>
  </tr>
  
  <tr>
  	<td>Telepon</td>
    <td>:</td>
    <td> <input type="text" class="inp-form" name="telpon_siswa" value="<?php echo $data['telpon_siswa']; ?>"> </td>
  </tr>


<tr>
  	<td></td> <td></td> <td> <input type="hidden" name="id_siswa" value="<?php echo $data['id_siswa']; ?>">
  	<input type="SUBMIT" name="submit" value="Save" class="form-submit">
    <input name="kembali" type="button" class="form-kembali" id="SUMBIT" onclick="history.back();" value="Kembali"></td>
  </tr>
</table>
</form>