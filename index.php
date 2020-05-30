<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pengumuman Kelulusan SMPN 2 Pekalongan</title>
    <link rel="stylesheet" href="css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="container">
<div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle btn-primary" data-toggle="collapse" data-target=".navbar-collapse">
              Menu
            </button>
            <a class="navbar-brand" href="index.php?page=home"><img src="images/logo.png" width="42" height="48" class="barlogo"></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <li>
                <a href="index.php?page=home">Beranda</a>
              </li>
              <li>
                <a href="index.php?page=panduan">Pengumuman Penting</a>
              </li>
              <li>
                <a href="http://portal.smpn2-pekalongan.sch.id">Website SMP 2 Pekalongan</a>
              </li>
             
            </ul>
           
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
</div
<div class="container">
     <table width="1024" align="center">
  <tr>
    <td><img src="images/heny.jpg" width="150" align="top"></td><td width="300" align="justify" align="top"><strong><center><h5>Assalamu'alaikum Wr.Wb.</h5></center><br></strong>
	<h5>Syukur Alhamdulillah kita panjatkan kehadirat Allah SWT yang telah banyak memberikan nikmat kepada kita sehingga pada siang hari ini, dalam keprihatinan 
	wabah pandemi Covid-19 SMP N 2 Pekalongan dapat menyampaikan pengumuman kelulusan secara online sesuai dengan protokol kesehatan untuk physical distancing. Saya ucapkan terima kasih kepada Bapak/Ibu guru, Orang Tua, Komite dan pihak lain 
	yang telah mendoakan anak-anak SMP N 2 Pekalongan sehingga siswa-siswi kelas IX dapat menyelesaikan pembelajaran serta evaluasi pembelajaran secara baik,
	walaupun harus belajar serta mengerjakan tugas-tugas dari rumah mengingat adanya wabah Covid-19. Kami berharap anak – anak dapat merayakan kelulusan ini dengan cara yang mulia dan rasa bersyukur dengan caranya masing-masing, di lingkungan masing-masing sehingga dengan rasa syukur tersebut dapat membawa keberkahan untuk 
	melanjutkan pendidikan yang terbaik di tingkat berikutnya. Kami hanya berpesan di masa-masa pandemi seperti ini selalu ikuti protokol kesehatan, 
	selalu pakai masker, cuci tangan pakai sabun dan jaga jarak serta hindari kerumunan. Semoga kita semua diberi kesehatan dan keselematan dan dapat
	melewati ujian pandemi ini dengan penuh semangat dan kesabaran. Akhirnya Ibu berpesan setelah resmi menjadi alumni SMP 2 Pekalongan, jangan pernah
	lupakan almamater, junjung tinggi nama baik sekolah dan tentunya selalu berprestasi dimanapun kalian berada.</h5>
	<br><strong><center><h5>Wassalamu'alaikum Wr.Wb.</h5></center></strong></td><td width="25"></td><td>
<?php

		  require "config.php";

		   $page=$_GET['page'];
		   $filename="content/$page.php";
		   if (!file_exists($filename))
        {
         include "content/home.php";
        }
            else
        {@include "content/$page.php";}
?>
      </td>
  </tr>
</table></div>

      <div align="center" class="alert alert-dismissable alert-danger">
<h4>
<script type="text/javascript">
TargetDate = "05/05/2020 05:00 AM";
BackColor = "";
ForeColor = "";
CountActive = true;
CountStepper = -1;
LeadingZero = true;
DisplayFormat = "%%D%% Hari, %%H%% Jam, %%M%% Menit, %%S%% Detik Lagi, Menuju Waktu Pengumuman Kelulusan";
FinishMessage = "Akses dibuka, sekarang sudah waktunya pengumuman!";
</script>
<script type="text/javascript" src="js/countdown.js"></script>
</h4>
Jumlah Kunjungan :
<?php
$fp = fopen("hits.txt", "r");
$count = fread($fp, 1024);
fclose($fp);
$count = $count + 1;
echo $count;
$fp = fopen("hits.txt", "w");
fwrite($fp, $count);
fclose($fp);
?><br><h6>Develop by :<a href="https://www.facebook.com/tripamungkas">&nbsp;AWS</a> | Tim IT SMP 2 Pekalongan | Medio 2020 | bootstrap</h6>
</div> 
     

    <script src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" async="" src="js/ga.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootswatch.js"></script>
</body>
</html>
