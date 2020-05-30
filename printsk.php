<?php 
@require_once 'include/fpdf/fpdf.php';
@require_once 'include/config.php';  
@require_once 'include/classes/database.class.php';

$dbclass    		= new database($dbtype, $dbhost, $dbname, $dbuser, $dbpass);
$mysqli     		= new mysqli($dbhost, $dbuser, $dbpass, $dbname);

class PDF extends FPDF
{
//Page header
function Header()
{
	//Logo
	$this->Image('images/logobks.jpg',12,8,25);
	$this->Image('images/logo.png',180,10,22);
	$this->Image('images/stempelsmp2.png',110,260,42);
	$this->Image('images/ttheny.png',120,272,60);
	//Times bold 18
	$this->SetFont('Times','',12);
	//Move to the right
	$this->Cell(82);
	//Title
	$this->Cell(30,6,'PEMERINTAH KOTA PEKALONGAN',0,1,'C');
	//Times bold 12
	$this->SetFont('Times','',12);
	//Move to the right
	$this->Cell(82);
	$this->Cell(30,4,'DINAS PENDIDIKAN',0,1,'C');
	$this->Cell(82);
	$this->SetFont('Times','B',12);
	$this->Cell(30,4,'SEKOLAH MENENGAH NEGERI 2',0,1,'C');
	$this->Cell(82);
	$this->Cell(30,4,'SMP N 2)',0,1,'C');
	//Times bold 14
	$this->SetFont('Times','',12);
	//Move to the right
	$this->Cell(82);
	$this->Cell(30,6,'Jl. Cendrawasih 11 Pekalongan Telp. (0285) 422774',0,1,'C');
	//Times bold 12
	$this->SetFont('Times','',12);
	//Move to the right
	$this->Cell(82);
	$this->Cell(30,4,'email : smpn2_pkl_best@yahoo.com | website : www.smpn2-pekalongan.sch.id',0,1,'C');
	$this->Ln(5);

	//Set Line
    $this->SetLineWidth(1);
    //Line
	$this->Line(18,40,200,40);
	//Line break
	$this->Ln(1);
    
}

// Page footer
function Footer()
{
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}

}
//$NoUjian = "$_POST[kd1]-$_POST[kd2]-$_POST[kd3]-$_POST[kd4]";
$noujian = $_REQUEST['noujian'];
$sql    = "SELECT * FROM tb_student WHERE noujian = '$noujian'";
$query  = $dbclass->query($sql);
$data   = $dbclass->get_row();
$kartu   = $data['kartu'];
$addresse = $data['addresse'];
$nama        = $data['name'];
$tgllhr        = $data['tgllhr'];
$noujian     = $data['noujian'];
$ttl = $data['ttl'];

$text = "Yang bertanda tangan dibawah ini, Kepala SMP Negeri 2 Pekalongan, dengan ini menerangkan bahwa :";
//Instanciation of inherited class
$pdf=new PDF('P','mm','Legal');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetMargins(25.4, 25.4, 25.4);
$pdf->SetFont('Times','B',12);
//Move to the right
$pdf->Cell(15.4);
$pdf->MultiCell(0,5,"KEPUTUSAN KEPALA SMP NEGERI 2 PEKALONGAN",0,'C');
$pdf->SetFont('Times','',11);
$pdf->MultiCell(0,5,"Nomor : 800/158",0,'C');
$pdf->MultiCell(0,5,"Tentang",0,'C');
$pdf->MultiCell(0,5,"PENETAPAN KELULUSAN PESERTA DIDIK",0,'C');
$pdf->MultiCell(0,5,"SMP NEGERI 2 PEKALONGAN TAHUN PELAJARAN 2017/2018",0,'C');
$pdf->Ln(1);
$pdf->MultiCell(0,5,"KEPALA SMP NEGERI 2 PEKALONGAN",0,'C');
//Line break
$pdf->Ln(3);
$pdf->Cell(25,6,"Menimbang",0,0,'L');
$pdf->MultiCell(140,6,"Bahwa peserta didik telah menyelesaikan seluruh program pembelajaran serta berakhirnya kegiatan Ujian Nasional dan Ujian Akhir Sekolah Tahun Pelajaran 2017/2018 perlu dikeluarkan keputusan tentang kelulusan peserta didik kelas IX SMP Negeri 2 Pekalongan",0,'J');
$pdf->Cell(25,5,"Mengingat",0,0,'L');
$pdf->Cell(5,6,"1.",0,0,'L');
$pdf->MultiCell(130,6,"Undang-Undang RI No. 20 Tahun 2003 Tentang Sisdiknas;",0,'J');
$pdf->Cell(25,5,"",0,0,'L');
$pdf->Cell(5,6,"2.",0,0,'L');
$pdf->MultiCell(130,6,"PP Nomor 13 Tahun 2015 Tentang Perubahan ke-2 Standar Nasional Pendidikan;",0,'J');
$pdf->Cell(25,5,"",0,0,'L');
$pdf->Cell(5,6,"3.",0,0,'L');
$pdf->MultiCell(130,6,"Permendikbud Nomor 5 Tahun 2015 Tentang Kriteria Kelulusan Peserta Didik;",0,'J');
$pdf->Cell(25,5,"",0,0,'L');
$pdf->Cell(5,6,"4.",0,0,'L');
$pdf->MultiCell(135,6,"Peraturan Badan Standar Nasional Pendidikan No. 0043/P/BSNP/I/2017 Tentang Prosedur Operasi Standar Penyelenggaraan Ujian Nasional SMP Tahun Pelajaran 2016/2017;",0,'J');
$pdf->Cell(25,5,"Memperhatikan",0,0,'L');
$pdf->Cell(5,6,"1.",0,0,'L');
$pdf->MultiCell(135,6,"Surat Edaran Kepala Dinas Pendidikan Kota Pekalongan No. 420/C/1366 Tentang Pengendalian Pengumuman Kelulusan Tahun Pelajaran 2017/2018;",0,'J');
$pdf->Cell(25,5,"",0,0,'L');
$pdf->Cell(5,6,"2.",0,0,'L');
$pdf->MultiCell(135,6,"Keputusan Kepala SMP Negeri 2 Pekalongan No. 800/501 Tentang POS US pada SMP Negeri 2 Pekalongan Tahun Pelajaran 2017/2018;",0,'J');
$pdf->Cell(25,5,"",0,0,'L');
$pdf->Cell(5,6,"3.",0,0,'L');
$pdf->MultiCell(130,6,"Hasil analisis dan rapat penegasan Dewan Guru tentang Kelulusan pada tanggal 27 Mei 2018;",0,'J');
$pdf->Ln(2);
$pdf->MultiCell(0,5,"MEMUTUSKAN",0,'C');
$pdf->Cell(25,6,"Menetapkan",0,0,'L');
$pdf->Ln(5);
$pdf->Cell(25,6,"Pertama",0,0,'L');
$pdf->MultiCell(140,6,"Bahwa peserta didik sebagaimana tersebut di bawah ini :",0,'J');

//Line break
$pdf->Ln(5);
//Move to the right
$pdf->Cell(15.4);
$pdf->MultiCell(0,5,"Nama                                  : ".$nama,0,'J');
//Move to the right
$pdf->Cell(15.4);
$pdf->MultiCell(0,5,"Nomor Peserta Ujian          : ".$kartu,0,'J');
//Move to the right
$pdf->Cell(15.4);
$pdf->MultiCell(0,5,"Tempat, Tanggal lahir        : ".$ttl,0,'J');
//Move to the right
$pdf->Cell(15.4);
$pdf->MultiCell(0,5,"NIS                                     : ".$noujian,0,'J');
//Move to the right
$pdf->Cell(15.4);
$pdf->MultiCell(0,5,"Kelas                                   : ".$addresse,0,'J');
$pdf->Cell(15.4);
$pdf->MultiCell(0,5,"Dinyatakan                         : ",0,'J');
// Set font
$pdf->Ln(5);
$pdf->Cell(40.4);
$pdf->SetFont('Times','B',16);
$pdf->MultiCell(90,8,"L U L U S",1,'C');
$pdf->SetFont('Times','',11);
$pdf->Cell(25,5,"",0,0,'L');
$pdf->MultiCell(140,6,"Pada Satuan Pendidikan di SMP Negeri 2 Pekalongan Tahun Pelajaran 2017/2018",0,'J');
	//Line break
	$pdf->Ln(2);
$pdf->Cell(25,6,"Kedua",0,0,'L');
$pdf->MultiCell(140,6,"Apabila dikemudian hari terdapat kekeliruan dalam Keputusan ini maka akan diperbaiki sebagaimana mestinya.",0,'J');

//Line break
$pdf->Ln(5);
//Move to the right
$pdf->Cell(105.4);
$pdf->MultiCell(0,5,"Pekalongan, 28 Mei 2018",0,'J');
$pdf->Cell(105.4);
$pdf->MultiCell(0,5,"Kepala Sekolah,",0,'J');
//Line break
$pdf->Ln(20);
//Move to the right
$pdf->Cell(105.4);
$pdf->MultiCell(0,5,"Heny Daryani, S.Pd.,M.Si.",0,'J');
$pdf->Cell(105.4);
$pdf->MultiCell(0,5,"NIP. 19650813 198703 2 008",0,'J');
$pdf->Output();
?>