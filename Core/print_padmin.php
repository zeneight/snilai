<?php
require('fpdf.php');

class PDF extends FPDF
{

// membaca data dari database

function LoadData()
{
    $data=array();
    mysql_connect("localhost","root","");
    mysql_select_db("simna");
    $query = "SELECT nama_siswa, nis, nama_guru, nip, nama_kelas, nama_pelajaran, nilai FROM tbl_nilai nilai, data_siswa siswa, setup_pelajaran pelajaran, setup_kelas kelas, data_guru guru WHERE nilai.id_siswa=siswa.id_siswa and nilai.id_kelas=kelas.id_kelas and nilai.id_pelajaran=pelajaran.id_pelajaran and nilai.id_guru=guru.id_guru order by siswa.nama_siswa asc";
    $hasil = mysql_query($query);
    $i = 0;
    while ($fetchdata = mysql_fetch_row($hasil))
    {
	$i++; // membuat counter 1, 2, 3, ... untuk ditampilkan
      array_unshift($fetchdata,$i);
	$data[] = $fetchdata;	
    }
    return $data;
}

// function untuk menampilkan tabel

function TabelBiasa($header,$data)
{
    // setting lebar masing-masing kolom dalam mm	
    $w=array(9,30,23,39,19,20,30,14); 
    
    // membuat kepala tabel
    for($i=0;$i<count($header);$i++)
    {
	// memberi warna latar merah pada kepala tabel
	$this->SetFillColor(255, 255, 0);  
// setting huruf bold pada kepala tabel
  	$this->SetFont('Arial','B',12);    
// parameter L menunjukkan teks rata kiri pada setiap 
// sel kepala tabel
      $this->Cell($w[$i],7,$header[$i],1,0,'L',1);    
    }
    $this->Ln();
    
    // menampilkan data
    // setting jenis font pada data tabel
	
    $this->SetFont('arial','',9);     	
    foreach($data as $row)
    {
	for($i=0;$i<=sizeof($w)-1;$i++) 
	    $this->Cell($w[$i],6,$row[$i],1); 
      $this->Ln();
    }
    // penutup tabel
    $this->Cell(array_sum($w),0,'','T');
}

}

$pdf=new PDF();

// nama-nama kolom untuk kepala tabel
$header=array('No','Nama Siswa','NIS','Nama Guru','NIP','Kelas','MP','Nilai');

// memanggil function untuk baca data
$data=$pdf->LoadData();

$pdf->AddPage();

// memanggil function untuk menampilkan tabel
$pdf->TabelBiasa($header,$data);
$pdf->Output();
?>