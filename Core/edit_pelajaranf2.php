<?php
include 'conn.php';
$id = $_GET['id']; //get the no which will updated
$query = "SELECT * FROM setup_pelajaran WHERE id_pelajaran = $id"; //get the data that will be updated
$hasil = mysql_query($query);
$data  = mysql_fetch_array($hasil);
?>

<div id="page-heading">
    <h1>Form Edit Pelajaran</h1>
</div>

<form method="post" action="edit_pelajaran.php">
<table width="500" border="0" cellpadding="2" cellspacing="2" id="id-form">
  <tr>
  	<td width="23%"> No </td>
    <td width="2%">:</td>
    <td width="75%"> <input type="text" class="inp-form" name="id_pelajaran" disabled='disable' value="<?php echo $data['id_pelajaran']; ?>"> </td>
  </tr>

  <tr>
  	<td>Nama Pelajaran</td>
    <td>:</td>
    <td> <input type="text" name="nama_pelajaran" class="inp-form" value="<?php echo $data['nama_pelajaran']; ?>"> </td>
  </tr>

 
<tr>
  	<td></td> <td></td> <td> <input type="hidden" name="id_pelajaran" value="<?php echo $data['id_pelajaran']; ?>">
  	<input type="SUBMIT" name="SUBMIT" value="Save" class="form-submit">
    <input name="SUMBIT" type="button" class="form-kembali" id="SUMBIT" onclick="history.back();" value="Kembali"></td>
  </tr>
</table>
</form>