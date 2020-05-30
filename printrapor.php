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
	
	$this->Image('images/stempelsmp2.png',110,226,42);
	$this->Image('images/ttheny.png',120,236,60);
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

$smt1ipaa  = $data['smt1ipaa'];
$smt1ipab  = $data['smt1ipab'];
$smt1ipajml  = $data['smt1ipajml'];
$smt2ipaa  = $data['smt2ipaa'];
$smt2ipab  = $data['smt2ipab'];
$smt2ipajml  = $data['smt2ipajml'];
$smt3ipaa  = $data['smt3ipaa'];
$smt3ipab  = $data['smt3ipab'];
$smt3ipajml  = $data['smt3ipajml'];
$smt4ipaa  = $data['smt4ipaa'];

$smt4ipab  = $data['smt4ipab'];
$smt4ipajml  = $data['smt4ipajml'];
$smt5ipaa  = $data['smt5ipaa'];
$smt5ipab  = $data['smt5ipab'];
$smt5ipajml  = $data['smt5ipajml'];
$iparata  = $data['iparata'];
$smt1mtka  = $data['smt1mtka'];
$smt1mtkb  = $data['smt1mtkb'];
$smt1mtkjml  = $data['smt1mtkjml'];
$smt2mtka  = $data['smt2mtka'];

$smt2mtkb  = $data['smt2mtkb'];
$smt2mtkjml  = $data['smt2mtkjml'];
$smt3mtka  = $data['smt3mtka'];
$smt3mtkb  = $data['smt3mtkb'];
$smt3mtkjml  = $data['smt3mtkjml'];
$smt4mtka  = $data['smt4mtka'];
$smt4mtkb  = $data['smt4mtkb'];
$smt4mtkjml  = $data['smt4mtkjml'];
$smt5mtka  = $data['smt5mtka'];
$smt5mtkb  = $data['smt5mtkb'];

$smt5mtkjml  = $data['smt5mtkjml'];
$mtkrata  = $data['mtkrata'];
$smt1binga  = $data['smt1binga'];
$smt1bingb  = $data['smt1bingb'];
$smt1bingjml  = $data['smt1bingjml'];
$smt2binga  = $data['smt2binga'];
$smt2bingb  = $data['smt2bingb'];
$smt2bingjml  = $data['smt2bingjml'];
$smt3binga  = $data['smt3binga'];
$smt3bingb  = $data['smt3bingb'];

$smt3bingjml  = $data['smt3bingjml'];
$smt4binga  = $data['smt4binga'];
$smt4bingb  = $data['smt4bingb'];
$smt4bingjml  = $data['smt4bingjml'];
$smt5binga  = $data['smt5binga'];
$smt5bingb  = $data['smt5bingb'];
$smt5bingjml  = $data['smt5bingjml'];
$bingrata  = $data['bingrata'];
$smt1binaa  = $data['smt1binaa'];
$smt1binab  = $data['smt1binab'];

$smt1binajml  = $data['smt1binajml'];
$smt2binaa  = $data['smt2binaa'];
$smt2binab  = $data['smt2binab'];
$smt2binajml  = $data['smt2binajml'];
$smt3binaa  = $data['smt3binaa'];
$smt3binab  = $data['smt3binab'];
$smt3binajml  = $data['smt3binajml'];
$smt4binaa  = $data['smt4binaa'];
$smt4binab  = $data['smt4binab'];
$smt4binajml  = $data['smt4binajml'];

$smt5binaa  = $data['smt5binaa'];
$smt5binab  = $data['smt5binab'];
$smt5binajml  = $data['smt5binajml'];
$binarata  = $data['binarata'];
$jmlsmt1a  = $data['jmlsmt1a'];
$jmlsmt1b  = $data['jmlsmt1b'];
$jmlsmt1  = $data['jmlsmt1'];
$jmlsmt2a  = $data['jmlsmt2a'];
$jmlsmt2b  = $data['jmlsmt2b'];
$jmlsmt2  = $data['jmlsmt2'];

$jmlsmt3a  = $data['jmlsmt3a'];
$jmlsmt3b  = $data['jmlsmt3b'];
$jmlsmt3  = $data['jmlsmt3'];
$jmlsmt4a  = $data['jmlsmt4a'];
$jmlsmt4b  = $data['jmlsmt4b'];
$jmlsmt4  = $data['jmlsmt4'];
$jmlsmt5a  = $data['jmlsmt5a'];
$jmlsmt5b  = $data['jmlsmt5b'];
$jmlsmt5  = $data['jmlsmt5'];
$rataall  = $data['rataall'];



//Instanciation of inherited class
$pdf=new PDF('P','mm','A4');
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetMargins(25.4, 25.4, 25.4);
$pdf->SetFont('Arial','U',12);
//Move to the right
$pdf->Cell(15.4);
$pdf->MultiCell(0,5,"SURAT KETERANGAN",0,'C');
$pdf->SetFont('Arial','',11);
$pdf->MultiCell(0,5,"Nomor : 800/158",0,'C');

//Line break
$pdf->Ln(6);
$pdf->MultiCell(165,6,"Yang bertanda tangan di bawah ini:",0,'J');

//Line break
$pdf->Ln(3);
//Move to the right

$pdf->MultiCell(0,5,"Nama                                            :   Heny Daryani, S.Pd.,M.Si.",0,'J');
//Move to the right

$pdf->MultiCell(0,5,"Jabatan                                         :   Kepala Sekolah",0,'J');
//Move to the right

$pdf->MultiCell(0,5,"Akreditasi Sekolah                        :   A",0,'J');

//Line break
$pdf->Ln(5);
$pdf->MultiCell(165,6,"Dengan ini menerangkan bahwa :",0,'J');


//Line break
$pdf->Ln(3);
//Move to the right

$pdf->MultiCell(0,5,"Nama                                            :   ".$nama,0,'J');
//Move to the right

$pdf->MultiCell(0,5,"Nomor Induk Siswa Nasional       :   ".$nisn,0,'J');

// Set font
$pdf->SetFont('Arial','',8);
$pdf->Ln(5);
$pdf->Cell(5,32,"NO",1,0,'C');
$pdf->Cell(30,32,"MATA PELAJARAN",1,0,'C');
$pdf->Cell(120,8,"NILAI RAPOR SEMESTER",1,0,'C');
$pdf->Cell(15,8,"JML",1,1,'C');

$pdf->Cell(5,8,"",0,0,'C');
$pdf->Cell(30,8,"",0,0,'C');
$pdf->Cell(120,8,"ASPEK KOMPETENSI",1,0,'C');
$pdf->Cell(15,8,"RATA-",1,1,'C');

$pdf->Cell(5,8,"",0,0,'C');
$pdf->Cell(30,8,"",0,0,'C');
$pdf->Cell(24,8,"SMT I",1,0,'C');
$pdf->Cell(24,8,"SMT II",1,0,'C');
$pdf->Cell(24,8,"SMT III",1,0,'C');
$pdf->Cell(24,8,"SMT IV",1,0,'C');
$pdf->Cell(24,8,"SMT V",1,0,'C');
$pdf->Cell(15,8,"RATA",1,1,'C');

$pdf->Cell(5,8,"",0,0,'C');
$pdf->Cell(30,8,"",0,0,'C');
$pdf->Cell(8,8,"A",1,0,'C');
$pdf->Cell(8,8,"B",1,0,'C');
$pdf->Cell(8,8,"JML",1,0,'C');
$pdf->Cell(8,8,"A",1,0,'C');
$pdf->Cell(8,8,"B",1,0,'C');
$pdf->Cell(8,8,"JML",1,0,'C');
$pdf->Cell(8,8,"A",1,0,'C');
$pdf->Cell(8,8,"B",1,0,'C');
$pdf->Cell(8,8,"JML",1,0,'C');
$pdf->Cell(8,8,"A",1,0,'C');
$pdf->Cell(8,8,"B",1,0,'C');
$pdf->Cell(8,8,"JML",1,0,'C');
$pdf->Cell(8,8,"A",1,0,'C');
$pdf->Cell(8,8,"B",1,0,'C');
$pdf->Cell(8,8,"JML",1,0,'C');
$pdf->Cell(15,8,"SMT I-V",1,1,'C');

$pdf->Cell(5,4,"1",1,0,'C');
$pdf->Cell(30,4,"2",1,0,'C');
$pdf->Cell(8,4,"3",1,0,'C');
$pdf->Cell(8,4,"4",1,0,'C');
$pdf->Cell(8,4,"5",1,0,'C');
$pdf->Cell(8,4,"6",1,0,'C');
$pdf->Cell(8,4,"7",1,0,'C');
$pdf->Cell(8,4,"8",1,0,'C');
$pdf->Cell(8,4,"9",1,0,'C');
$pdf->Cell(8,4,"10",1,0,'C');
$pdf->Cell(8,4,"11",1,0,'C');
$pdf->Cell(8,4,"12",1,0,'C');
$pdf->Cell(8,4,"13",1,0,'C');
$pdf->Cell(8,4,"14",1,0,'C');
$pdf->Cell(8,4,"15",1,0,'C');
$pdf->Cell(8,4,"16",1,0,'C');
$pdf->Cell(8,4,"17",1,0,'C');
$pdf->Cell(15,4,"18",1,1,'C');

$pdf->Cell(5,8,"1",1,0,'C');
$pdf->Cell(30,8,"IPA",1,0,'L');
$pdf->Cell(8,8,$smt1ipaa,1,0,'C');
$pdf->Cell(8,8,$smt1ipab,1,0,'C');
$pdf->Cell(8,8,$smt1ipajml,1,0,'C');
$pdf->Cell(8,8,$smt2ipaa,1,0,'C');
$pdf->Cell(8,8,$smt2ipab,1,0,'C');
$pdf->Cell(8,8,$smt2ipajml,1,0,'C');
$pdf->Cell(8,8,$smt3ipaa,1,0,'C');
$pdf->Cell(8,8,$smt3ipab,1,0,'C');
$pdf->Cell(8,8,$smt3ipajml,1,0,'C');
$pdf->Cell(8,8,$smt4ipaa,1,0,'C');
$pdf->Cell(8,8,$smt4ipab,1,0,'C');
$pdf->Cell(8,8,$smt4ipajml,1,0,'C');
$pdf->Cell(8,8,$smt5ipaa,1,0,'C');
$pdf->Cell(8,8,$smt5ipab,1,0,'C');
$pdf->Cell(8,8,$smt5ipajml,1,0,'C');
$pdf->Cell(15,8,$iparata,1,1,'C');

$pdf->Cell(5,8,"2",1,0,'C');
$pdf->Cell(30,8,"MATEMATIKA",1,0,'L');
$pdf->Cell(8,8,$smt1mtka,1,0,'C');
$pdf->Cell(8,8,$smt1mtkb,1,0,'C');
$pdf->Cell(8,8,$smt1mtkjml,1,0,'C');
$pdf->Cell(8,8,$smt2mtka,1,0,'C');
$pdf->Cell(8,8,$smt2mtkb,1,0,'C');
$pdf->Cell(8,8,$smt2mtkjml,1,0,'C');
$pdf->Cell(8,8,$smt3mtka,1,0,'C');
$pdf->Cell(8,8,$smt3mtkb,1,0,'C');
$pdf->Cell(8,8,$smt3mtkjml,1,0,'C');
$pdf->Cell(8,8,$smt4mtka,1,0,'C');
$pdf->Cell(8,8,$smt4mtkb,1,0,'C');
$pdf->Cell(8,8,$smt4mtkjml,1,0,'C');
$pdf->Cell(8,8,$smt5mtka,1,0,'C');
$pdf->Cell(8,8,$smt5mtkb,1,0,'C');
$pdf->Cell(8,8,$smt5mtkjml,1,0,'C');
$pdf->Cell(15,8,$mtkrata,1,1,'C');

$pdf->Cell(5,8,"3",1,0,'C');
$pdf->Cell(30,8,"BAHASA INGGRIS",1,0,'L');
$pdf->Cell(8,8,$smt1binga,1,0,'C');
$pdf->Cell(8,8,$smt1bingb,1,0,'C');
$pdf->Cell(8,8,$smt1bingjml,1,0,'C');
$pdf->Cell(8,8,$smt2binga,1,0,'C');
$pdf->Cell(8,8,$smt2bingb,1,0,'C');
$pdf->Cell(8,8,$smt2bingjml,1,0,'C');
$pdf->Cell(8,8,$smt3binga,1,0,'C');
$pdf->Cell(8,8,$smt3bingb,1,0,'C');
$pdf->Cell(8,8,$smt3bingjml,1,0,'C');
$pdf->Cell(8,8,$smt4binga,1,0,'C');
$pdf->Cell(8,8,$smt4bingb,1,0,'C');
$pdf->Cell(8,8,$smt4bingjml,1,0,'C');
$pdf->Cell(8,8,$smt5binga,1,0,'C');
$pdf->Cell(8,8,$smt5bingb,1,0,'C');
$pdf->Cell(8,8,$smt5bingjml,1,0,'C');
$pdf->Cell(15,8,$bingrata,1,1,'C');

$pdf->Cell(5,8,"4",1,0,'C');
$pdf->Cell(30,8,"BAHASA INDONESIA",1,0,'L');
$pdf->Cell(8,8,$smt1binaa,1,0,'C');
$pdf->Cell(8,8,$smt1binab,1,0,'C');
$pdf->Cell(8,8,$smt1binajml,1,0,'C');
$pdf->Cell(8,8,$smt2binaa,1,0,'C');
$pdf->Cell(8,8,$smt2binab,1,0,'C');
$pdf->Cell(8,8,$smt2binajml,1,0,'C');
$pdf->Cell(8,8,$smt3binaa,1,0,'C');
$pdf->Cell(8,8,$smt3binab,1,0,'C');
$pdf->Cell(8,8,$smt3binajml,1,0,'C');
$pdf->Cell(8,8,$smt4binaa,1,0,'C');
$pdf->Cell(8,8,$smt4binab,1,0,'C');
$pdf->Cell(8,8,$smt4binajml,1,0,'C');
$pdf->Cell(8,8,$smt5binaa,1,0,'C');
$pdf->Cell(8,8,$smt5binab,1,0,'C');
$pdf->Cell(8,8,$smt5binajml,1,0,'C');
$pdf->Cell(15,8,$binarata,1,1,'C');


$pdf->Cell(35,8,"JUMLAH",1,0,'C');
$pdf->Cell(8,8,$jmlsmt1a,1,0,'C');
$pdf->Cell(8,8,$jmlsmt1b,1,0,'C');
$pdf->Cell(8,8,$jmlsmt1,1,0,'C');
$pdf->Cell(8,8,$jmlsmt2a,1,0,'C');
$pdf->Cell(8,8,$jmlsmt2b,1,0,'C');
$pdf->Cell(8,8,$jmlsmt2,1,0,'C');
$pdf->Cell(8,8,$jmlsmt3a,1,0,'C');
$pdf->Cell(8,8,$jmlsmt3b,1,0,'C');
$pdf->Cell(8,8,$jmlsmt3,1,0,'C');
$pdf->Cell(8,8,$jmlsmt4a,1,0,'C');
$pdf->Cell(8,8,$jmlsmt4b,1,0,'C');
$pdf->Cell(8,8,$jmlsmt4,1,0,'C');
$pdf->Cell(8,8,$jmlsmt5a,1,0,'C');
$pdf->Cell(8,8,$jmlsmt5b,1,0,'C');
$pdf->Cell(8,8,$jmlsmt5,1,0,'C');
$pdf->Cell(15,8,$rataall,1,1,'C');

//Line break
$pdf->SetFont('Arial','',11);
$pdf->Ln(5);
//Move to the right
$pdf->MultiCell(165,6,"Keterangan :",0,'J');
$pdf->MultiCell(0,5,"A     :   Kompetensi Pengetahuan",0,'J');
//Move to the right
$pdf->MultiCell(0,5,"B     :   Kompetensi Keterampilan",0,'J');

$pdf->SetFont('Arial','',11);
$pdf->Ln(2);
$pdf->MultiCell(165,6,"Demikian surat keterangan ini agar dapat dipergunakan untuk PPDB SMA/SMK Tahun Pelajaran 2020/2021, dan kepada yang berkepentingan untuk menjadikan maklum.",0,'J');

	
//Line break
$pdf->Ln(4);
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