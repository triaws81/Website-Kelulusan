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
	
	$this->Image('images/stempelsmp2.png',110,231,42);
	$this->Image('images/ttheny.png',120,243,60);
	//Arial bold 18
	$this->SetFont('Arial','',12);
	//Move to the right
	$this->Cell(82);
	//Title
	$this->Cell(40,6,'PEMERINTAH KOTA PEKALONGAN',0,1,'C');
	//Arial bold 12
	$this->SetFont('Arial','',12);
	//Move to the right
	$this->Cell(82);
	$this->Cell(40,5,'DINAS PENDIDIKAN',0,1,'C');
	$this->Cell(82);
	$this->SetFont('Arial','B',12);
	$this->Cell(40,5,'SEKOLAH MENENGAH PERTAMA NEGERI 2',0,1,'C');
	$this->Cell(82);
	$this->SetFont('Arial','B',14);
	$this->Cell(40,5,'(SMP N 2)',0,1,'C');
	//Arial bold 14
	$this->SetFont('Arial','',11);
	//Move to the right
	$this->Cell(82);
	$this->Cell(40,6,'Jl. Cendrawasih 11 Pekalongan Telp. (0285) 422774',0,1,'C');
	//Arial bold 12
	$this->SetFont('Arial','',11);
	//Move to the right
	$this->Cell(82);
	$this->Cell(40,4,'email : smpn2_pkl_best@yahoo.com | website : www.smpn2-pekalongan.sch.id',0,1,'C');
	$this->Ln(5);

	//Set Line
    $this->SetLineWidth(0.5);
    //Line
	$this->Line(18,43,200,43);
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
    $this->Cell(0,10,'SMP Negeri 2 Pekalongan | NPSN : 20329533',0,0,'C');
}

}
//$NoUjian = "$_POST[kd1]-$_POST[kd2]-$_POST[kd3]-$_POST[kd4]";
$noujian = $_REQUEST['noujian'];
$sql    = "SELECT * FROM tb_student WHERE noujian = '$noujian'";
$query  = $dbclass->query($sql);
$data   = $dbclass->get_row();
$nama   = $data['name'];
$addresse = $data['addresse'];
$ortu        = $data['ortu'];
$nisn   = $data['nisn'];
$tgllhr        = $data['tgllhr'];
$noujian     = $data['noujian'];
$ttl = $data['ttl'];
$sekolah = $data['sekolah'];
$uspai  = $data['uspai'];
$usppkn  = $data['usppkn'];
$usbina  = $data['usbina'];
$usmtk  = $data['usmtk'];
$usipa  = $data['usipa'];
$usips  = $data['usips'];
$usbingg  = $data['usbingg'];
$ussenbud  = $data['ussenbud'];
$uspjok  = $data['uspjok'];
$usprakarya  = $data['usprakarya'];
$usbjawa  = $data['usbjawa'];
$usrata  = $data['usrata'];


//Instanciation of inherited class
$pdf=new PDF('P','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetMargins(25.4, 25.4, 25.4);
$pdf->SetFont('Arial','U',12);
//Move to the right
$pdf->Cell(15.4);
$pdf->MultiCell(0,5,"SURAT KETERANGAN LULUS",0,'C');
$pdf->SetFont('Arial','',11);
$pdf->MultiCell(0,5,"Nomor : 800/158",0,'C');

//Line break
$pdf->Ln(4);
$pdf->MultiCell(165,6,"Yang bertanda tangan di bawah ini, Kepala Sekolah Menengah Pertama (SMP) Negeri 2 Pekalongan, menerangkan dengan sesungguhnya bahwa:",0,'J');

//Line break
$pdf->Ln(3);
//Move to the right
$pdf->Cell(15.4);
$pdf->MultiCell(0,5,"Nama                                            :   ".$nama,0,'J');
//Move to the right
$pdf->Cell(15.4);
$pdf->MultiCell(0,5,"Tempat, Tanggal lahir                   :   ".$ttl,0,'J');
//Move to the right
$pdf->Cell(15.4);
$pdf->MultiCell(0,5,"Nama Orang Tua                          :   ".$ortu,0,'J');
//Move to the right
$pdf->Cell(15.4);
$pdf->MultiCell(0,5,"Nomor Induk Siswa                      :   ".$noujian,0,'J');
//Move to the right
$pdf->Cell(15.4);
$pdf->MultiCell(0,5,"Nomor Induk Siswa Nasional       :   ".$nisn,0,'J');

//Line break
$pdf->Ln(3);

$pdf->MultiCell(165,6,"Yang bersangkutan dinyatakan LULUS berdasarkan hasil Keputusan Rapat Pleno Kelulusan Dewan Guru SMP Negeri 2 Pekalongan pada hari Jum'at, 5 Juni 2020, dengan nilai sebagai berikut :",0,'J');

// Set font
$pdf->Ln(3);
$pdf->Cell(10,6,"NO",1,0,'C');
$pdf->Cell(100,6,"MATA PELAJARAN",1,0,'C');
$pdf->Cell(50,6,"NILAI UJIAN SEKOLAH",1,1,'C');

$pdf->Cell(110,6,"    Kelompok A",1,0);
$pdf->Cell(50,6,"",1,1,'C');

$pdf->Cell(10,6,"1",1,0);
$pdf->Cell(100,6,"Pendidikan Agama Islam dan Budi Pekerti",1,0);
$pdf->Cell(50,6,$uspai,1,1,'C');

$pdf->Cell(10,6,"2",1,0);
$pdf->Cell(100,6,"Pendidikan Pancasila dan Kewarganegaraan",1,0);
$pdf->Cell(50,6,$usppkn,1,1,'C');

$pdf->Cell(10,6,"3",1,0);
$pdf->Cell(100,6,"Bahasa Indonesia",1,0);
$pdf->Cell(50,6,$usbina,1,1,'C');

$pdf->Cell(10,6,"4",1,0);
$pdf->Cell(100,6,"Matematika",1,0);
$pdf->Cell(50,6,$usmtk,1,1,'C');

$pdf->Cell(10,6,"5",1,0);
$pdf->Cell(100,6,"Ilmu Pengetahuan Alam",1,0);
$pdf->Cell(50,6,$usipa,1,1,'C');

$pdf->Cell(10,6,"6",1,0);
$pdf->Cell(100,6,"Ilmu Pengetahuan Sosial",1,0);
$pdf->Cell(50,6,$usips,1,1,'C');

$pdf->Cell(10,6,"7",1,0);
$pdf->Cell(100,6,"Bahasa Inggris",1,0);
$pdf->Cell(50,6,$usbingg,1,1,'C');

$pdf->Cell(110,6,"    Kelompok B",1,0);
$pdf->Cell(50,6,"",1,1,'C');

$pdf->Cell(10,6,"8",1,0);
$pdf->Cell(100,6,"Seni Budaya",1,0);
$pdf->Cell(50,6,$ussenbud,1,1,'C');

$pdf->Cell(10,6,"9",1,0);
$pdf->Cell(100,6,"Pendidikan Jasmani, Olah Raga, dan Kesehatan",1,0);
$pdf->Cell(50,6,$uspjok,1,1,'C');

$pdf->Cell(10,6,"10",1,0);
$pdf->Cell(100,6,"Prakarya",1,0);
$pdf->Cell(50,6,$usprakarya,1,1,'C');

$pdf->Cell(10,6,"11",1,0);
$pdf->Cell(100,6,"Bahasa Jawa",1,0);
$pdf->Cell(50,6,$usbjawa,1,1,'C');


$pdf->Cell(110,6,"Rata-rata",1,0,'C');
$pdf->Cell(50,6,$usrata,1,1,'C');

$pdf->Ln(2);
$pdf->MultiCell(165,6,"Surat Keterangan Lulus ini berlaku sementara sampai dengan diterbitkannya Ijazah kepada yang bersangkutan, untuk menjadikan maklum bagi yang berkepentingan.",0,'J');

	
//Line break
$pdf->Ln(6);
//Move to the right
$pdf->Cell(105.4);
$pdf->MultiCell(0,5,"Pekalongan, 5 Juni 2020",0,'J');
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