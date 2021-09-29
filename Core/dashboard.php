<?php

if($_SESSION['domain']=='guru'){
	$id_guru=$_SESSION['id_guru'];
	$username=ucwords($_SESSION['username']);
	
	$data=mysql_fetch_array(mysql_query("select * from data_guru where id_guru='$id_guru'"));

	$kelamin=$data['kelamin'];
	
	if($kelamin=='laki-laki'){
		$sapaan='Pak ';
	}else{
		$sapaan='Ibu ';
	}
	
	$pengguna=$sapaan.$username;
}else{
	$pengguna=ucwords($_SESSION['username']);
}

?>

<div id="page-heading">
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
    		
            <div id="message-green">
            <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td class="green-left">Selamat Datang di web Sistem Informasi Nilai Online Akademik SLB N Jimbaran.</td>
                <td class="green-right"><a class="close-green"><img src="images/table/icon_close_green.gif"   alt="" /></a></td>
            </tr>
            </table>
            </div>
            
          
			<!--  start message-yellow -->
            <!--
            <div id="message-yellow">
            <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td class="yellow-left">You have a new message. <a href="">Go to Inbox.</a></td>
                <td class="yellow-right"><a class="close-yellow"><img src="images/table/icon_close_yellow.gif"   alt="" /></a></td>
            </tr>
            </table>
            </div>
            -->
            <!--  end message-yellow -->
            
 	        <table border="0" width="100%" cellpadding="0" cellspacing="0">
            <tr valign="top">
              <td><!--  start step-holder -->
                <!--  end step-holder -->
                <div id="table-content">
                <p align="center"><img src="images/slb.jpg" width="870" height="200" /></p>
                <p align="justify">Sekolah Luar Biasa Bagian B Negeri Pembina  Tingkat   Nasional Jimbaran&nbsp; Bali merupakan lembaga pendidikan yang  diperuntukkan   bagi peserta didik yang memiliki keterbatasan pendengaran dan  wicara   atau tuna rungu wicara, sehingga dalam berkomunikasi menggunakan bahasa    isyarat (<em>sign language</em>), komtal  (komunikasi total) sehingga   banyak peserta didiknya meggunakan alat bantu mendengar  (ABM), supaya&nbsp;   peserta didik dapat  berkomunkasi dengan baik.</p>
                <p align="justify"><br />
                  Seiring  dengan perkembangan IPTEK di SLB.B N PTN   Jimbaran juga melaksanakan pendidikan  sesuai dengan kurikulum dan   tuntunan kemajuan jaman, sehingga pembelajaran di  sekolah tidak berbeda   dengan sekolah regular pada umumnya. Malahan di SLB  selain   dikembangkan berbagai ilmu pengetahuan akademik juga dikembangkan    berbagai keterampilan yang dapat mengembangkan kecakapan hidup / <em>life skill </em>peserta didik. </p>
                <p align="justify"><br />
                  Peserta  didik yang memiliki kekurangan pendengaran   tidak bisa langsung menyampaikan  maksud dan tujuan mereka secara   verbal, karena penderita tunarungu tidak dapat  menerima informasi   melalui pendengarannya sehingga berpengaruh pada komunikasi  verbalnya   (ucapan). Peserta didik tunarungu wicara menyampaikan maksud dan    tujuannya melalui komunikasi non-verbal, yang dilakukan melalui tulisan,   bahasa  isyarat atau gerakan anggota tubuh ekspresi wajah dan   lain-lain. Siswa yang  memiliki keterbatasan pendengaran tidak bisa   berkomunikasi secara verbal (melalui  ucapan), dikarenakan keterbatasan   pembendaharan kata yang mereka miliki,  keterbatasan&nbsp; pendengaran   menghambat  mereka untuk mendapatkan informasi.</p>
                </div>
                
                <p align="center"><img src="images/peduli-pendidikan.jpg" /></p>
                <!-- end id-form  -->
              </td>
              <td>
              	<!--  start related-activities -->
                <?php include "pengumuman.php";?>  
                <!-- end related-activities -->
              </td>
            </tr>
            <tr>
              <td><img src="images/shared/blank.gif" width="695" height="1" alt="blank" /></td>
              <td></td>
            </tr>
          </table>

      

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
