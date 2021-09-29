<?php
include 'conn.php';
$id = $_GET['id']; //get the no which will updated
$query = "SELECT * FROM data_guru WHERE id_guru = $id"; //get the data that will be updated
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
?>

<div id="page-heading">
    <h1>Update Data Guru</h1>
</div>

<form method="post" action="edit_guru.php">
<table width="500" border="0" cellpadding="2" cellspacing="2" id="id-form">
  	<td width="23%"> No </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" class="inp-form" name="id_guru" disabled='disable' value="<?php echo $data['id_guru']; ?>"> </td>
  </tr>

  <tr>
  	<td>Nama Guru</td>
    <td>:</td>
    <td> <input type="text" class="inp-form" name="nama_guru" value="<?php echo $data['nama_guru']; ?>"> </td>
  </tr>
  
  <tr>
  	<td>NIP</td>
    <td>:</td>
    <td> <input type="text" class="inp-form" name="nip" value="<?php echo $data['nip']; ?>"> </td>
  </tr>
  
  <tr>
	<td>Kelamin</td>
    <td>:</td>
    <td><select name="kelamin" class="styledselect_form_1" >
		  <option value="laki-laki" <?php if ($data['kelamin']=="laki-laki"){echo'selected="selected"';} ?>>Laki-Laki</option>
          <option value="perempuan" <?php if ($data['kelamin']=="perempuan"){echo'selected="selected"';} ?>>Perempuan</option>
		</select>
	</td>
  </tr>
  
  <tr>
  	<td>Alamat</td>
    <td>:</td>
    <td> <input type="text" class="inp-form" name="alamat_guru" value="<?php echo $data['alamat_guru']; ?>"> </td>
  </tr>
  
  <tr>
  	<td>Telepon</td>
    <td>:</td>
    <td> <input type="text" name="telpon_guru" class="inp-form" value="<?php echo $data['telpon_guru']; ?>"> </td>
  </tr>


<tr>
  	<td></td> <td></td> <td> <input type="hidden" name="id_guru" value="<?php echo $data['id_guru']; ?>">
  	<input type="SUBMIT" name="submit" value="Save" class="form-submit">
    <input name="kembali" type="button" class="form-kembali" id="SUMBIT" onclick="history.back();" value="Kembali"></td>
  </tr>
</table>
</form>