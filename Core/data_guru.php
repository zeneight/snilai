<script language="javascript">
function getkey(e) 
{

if (window.event)
	return window.event.keyCode;
else if (e)
	return e.which;
else return null;
}

function goodchars(e, goods, field)
{
var key, keychar;
key = getkey(e);
if (key == null) return true;
keychar = String.fromCharCode(key);
keychar = keychar.toLowerCase();
goods = goods.toLowerCase();

// check goodkeys
if (goods.indexOf(keychar) != -1)
return true; 

// control keys
if ( key==null || key==0 || key==8 || key==9 || key==27 )
return true;

if (key == 13) {
	var i;
	for (i = 0; i < field.form.elements.length; i++) if (field == field.form.elements[i])
	break;

	i = (i + 1) % field.form.elements.length;
	field.form.elements[i].focus();
	return false;
	};
	
	// else return false
	return false;
} 
</script>

<?php

include "conn.php";


 // membuat variabel error dan diset kosong     
 $namaErr = $nipErr = $kelaminErr = $alamatErr = $telponErr = $usernameErr = $passwordErr = "";     
 //membuat variabel untuk menampung inputan dari form         
 
if(isset($_POST['submit'])){
    
         
	$nama_guru=ucwords(htmlentities($_POST['nama_guru']));
	$nip=htmlentities($_POST['nip']);
	$kelamin=htmlentities($_POST['kelamin']);
	$alamat_guru=ucwords(htmlentities($_POST['alamat_guru']));
	$telpon_guru=strtoupper(htmlentities($_POST['telpon_guru']));
	$username=htmlentities($_POST['username']);
	$password=md5(htmlentities($_POST['password']));
	
	$query=mysql_query("insert into data_guru values('','$nama_guru','$nip','$kelamin','$alamat_guru','$telpon_guru','$username','$password')");
	
	if($query){
		?><script language="javascript">document.location.href="?page=data_guru&status=1";</script><?php
	}else{
		?><script language="javascript">document.location.href="?page=data_guru&status=2";</script><?php
	}
	
}else{
	unset($_POST['submit']);
}


?>

<!--  start page-heading -->
<div id="page-heading">
    <h1>Data Guru</h1>
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
                <td class="green-left">Data Berhasil Disimpan</td>
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
    
    		<form action="?page=data_guru" method="post">
 	        <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr valign="top">
              <td><!--  start step-holder -->
                <!--  end step-holder -->
                  <!-- start id-form -->
                  <table border="0" cellpadding="0" cellspacing="0"  id="id-form">
                    <tr>
                      <th valign="top">Nama Guru </th>
                      <td><input type="text" class="inp-form" name="nama_guru" placeholder="Ini harus diisi!" required/>
                          <span class="error">* <?php echo $namaErr;?></span>
                      </td>
                      <td></td>
                    </tr>
                     <tr>
                      <th valign="top">NIP</th>
                      <td><input type="text" pattern="[1-9]{6}" class="inp-form" name="nip" placeholder="Ini harus diisi!" onKeyPress="return goodchars(event,'0123456789',this)" required/>
                          <span class="error">* <?php echo $nipErr;?></span>
                      </td>
                      <td></td>
                    </tr>
                    <tr>
                      <th valign="top">Jenis Kelamin</th>
                      <td><select name="kelamin"  class="styledselect_form_1">
                          <option value="laki-laki">Laki-laki</option>
                          <option value="perempuan">Perempuan</option>
                        </select>
                        <span class="error">* <?php echo $kelaminErr;?></span>
                      </td>
                      <td></td>
                    </tr>
                    <tr>
                      <th valign="top">Alamat</th>
                      <td><textarea name="alamat_guru" cols="" rows="" class="form-textarea" placeholder="Ini harus diisi!" required></textarea>
                          <span class="error">* <?php echo $alamatErr;?></span></td>
                      <td></td>
                    </tr>
                     <tr>
                      <th valign="top">Telpon </th>
                      <td><input type="text" class="inp-form" name="telpon_guru" onKeyPress="return goodchars(event,'0123456789',this)" placeholder="Ini harus diisi!" required/>
                          <span class="error">* <?php echo $telponErr;?></span></td>
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
            <th width="28%" class="table-header-repeat line-left minwidth-1"><a href="">Nama Guru</a></th>
            <th width="28%" class="table-header-repeat line-left minwidth-1"><a href="">NIP</a></th>
            <th width="7%" class="table-header-repeat line-left minwidth-1"><a href="">Kelamin</a></th>
            <th width="16%" class="table-header-repeat line-left minwidth-1"><a href="">Alamat</a></th>
            <th width="13%" class="table-header-repeat line-left minwidth-1"><a href="">Telpon</a></th>
            <th width="5%" class="table-header-repeat line-left minwidth-1"><a href="">Aksi</a></th>
        </tr>
        
        
        <?php
		$view=mysql_query("select * from data_guru order by id_guru asc");
		
		$no=0;
		while($row=mysql_fetch_array($view)){
		?>	
		<tr>
            <td><?php echo $no=$no+1;?></td>
            <td><?php echo $row['nama_guru'];?></td>
            <td><?php echo $row['nip'];?></td>
            <td><?php echo $row['kelamin'];?></td>
            <td><?php echo $row['alamat_guru'];?></td>
            <td><?php echo $row['telpon_guru'];?></td>
           
            <td class="options-width">
          
            <a href="?page=edit_guruf2&id=<?php echo $row['id_guru']; ?>" title="Update Status" class="icon-5 info-tooltip"></a>            
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
