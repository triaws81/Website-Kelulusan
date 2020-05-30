<html>
<head>
<title> Hasil Pencarian </title>
</head>
<body>
<?php
include "../config.php";
$noujian= $_POST['noujian']; //get the nama value from form
$q = "SELECT * from tb_student where noujian = '$noujian' "; //query to get the search result
$result = mysql_query($q); //execute the query $q
echo "<center>";
echo "<h4> Hasil Pencarian </h4>";
echo "<table width='400' class='table table-striped table-hover'>";
while ($data = mysql_fetch_array($result)) {  //fetch the result from query into an array
echo "
 <tr class='active'>
    <td width='180'>NIS</td>
    <td><strong>".$data['noujian']."</strong></td>
  </tr>
  <tr>
    <td>Nama Lengkap</td>
    <td><font style='text-transform: capitalize;'><strong>".$data['name']."</strong></font></td>
  </tr>
  <tr>
    <td>Kelas</td>
    <td><font style='text-transform: capitalize;'><strong>".$data['kls']."</strong></font></td>
  </tr>
  <tr class='active'>
    <td>Keterangan</td>
    <td><font color='#0066FF' size='5' style='text-transform: uppercase; align:center;'><div align='center'>".$data['ket']."</td>
  </div></tr>
  
   <tr>
    <td colspan=2><strong>Penyelesaian Administrasi yang harus diselesaikan :</strong></td>
   </tr>
  
  <tr>
    <td>Pengembalian Buku Perpustakaan</strong></td>
    <td><strong><div align='center'>".$data['perpus']."</div></strong></td>
   </tr>
    <tr>
    <td colspan=2>Kami ucapkan terima kasih kepada kalian alumni tahun 2020, walaupun di tengah pandemi Covid-19 dan harus belajar dan mengerjakan tugas2 dari rumah tetapi semangat kalian luar biasa. Semoga kita dapat memetik pelajaran dari pandemi ini. Semoga sukses di jenjang berikutnya</td>
	</tr>
	<tr>
    <td colspan=2>Sebagai bagian dari Protokol Kesehatan mohon untuk dicetak sendiri, dengan ketentuan : Dicetak (lebih baik berwarna) dengan kertas ukuran A4 80 gram :</td>
	</tr>";
echo "</table>";
echo "<a href='printskk.php?noujian=".$data['noujian']."' class='btn btn-primary'>Cetak SURAT KETERANGAN KELULUSAN</a>";
echo "<a href='printskl.php?noujian=".$data['noujian']."' class='btn btn-success'>Cetak SURAT KETERANGAN LULUS</a>";
echo "<a href='printrapor.php?noujian=".$data['noujian']."' class='btn btn-info'>Cetak SURAT KETERANGAN RAPOR</a>";


}
?>
</body>
</html>