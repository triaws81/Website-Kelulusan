<?php
include "excel_reader2.php";
include "../config.php";

// file yang tadinya di upload, di simpan di temporary file PHP, file tersebut yang kita ambil
// dan baca dengan PHP Excel Class
$data = new Spreadsheet_Excel_Reader($_FILES['fileexcel']['tmp_name']);
$hasildata = $data->rowcount($sheet_index=0);
// default nilai 
$sukses = 0;
$gagal = 0;

for ($i=1; $i<=$hasildata; $i++)
{
  $data1 = $data->val($i,1); 
  $data2 = $data->val($i,2);
  $data3 = $data->val($i,3);
  $data4 = $data->val($i,4);
  $data5 = $data->val($i,5);
  $data6 = $data->val($i,6);
  $data7 = $data->val($i,7);
  $data8 = $data->val($i,8);
  $data9 = $data->val($i,9);
  $data10 = $data->val($i,10);
  $data11 = $data->val($i,11);
  $data12 = $data->val($i,12);
  $data13 = $data->val($i,13);
  $data14 = $data->val($i,14);
  $data15 = $data->val($i,15);
  $data16 = $data->val($i,16);
  $data17 = $data->val($i,17);
  $data18 = $data->val($i,18);
  $data19 = $data->val($i,19);
  $data20 = $data->val($i,20);
  $data21 = $data->val($i,21);
  $data22 = $data->val($i,22);
  $data23 = $data->val($i,23);
  $data24 = $data->val($i,24); 
  $data25 = $data->val($i,25);
  $data26 = $data->val($i,26);
  $data27 = $data->val($i,27);
  $data28 = $data->val($i,28);
  $data29 = $data->val($i,29);
  $data30 = $data->val($i,30);
  $data31 = $data->val($i,31);
  $data32 = $data->val($i,32);
  $data33 = $data->val($i,33);
  $data34 = $data->val($i,34);
  $data35 = $data->val($i,35);
  $data36 = $data->val($i,36);
  $data37 = $data->val($i,37);
  $data38 = $data->val($i,38);
  $data39 = $data->val($i,39);
  $data40 = $data->val($i,40);
  $data41 = $data->val($i,41);
  $data42 = $data->val($i,42);
  $data43 = $data->val($i,43);
  $data44 = $data->val($i,44);
  $data45 = $data->val($i,45);
  $data46 = $data->val($i,46);
  $data47 = $data->val($i,47); 
  $data48 = $data->val($i,48);
  $data49 = $data->val($i,49);
  $data50 = $data->val($i,50);
  $data51 = $data->val($i,51);
  $data52 = $data->val($i,52);
  $data52 = $data->val($i,53);
  $data54 = $data->val($i,54);
  $data55 = $data->val($i,55);
  $data56 = $data->val($i,56);
  $data57 = $data->val($i,57);
  $data58 = $data->val($i,58);
  $data59 = $data->val($i,59);
  $data60 = $data->val($i,60);
  $data61 = $data->val($i,61);
  $data62 = $data->val($i,62);
  $data63 = $data->val($i,63);
  $data64 = $data->val($i,64);
  $data65 = $data->val($i,65);
  $data66 = $data->val($i,66);
  $data67 = $data->val($i,67);
  $data68 = $data->val($i,68);
  $data69 = $data->val($i,69);
  $data70 = $data->val($i,70); 
  $data71 = $data->val($i,71);
  $data72 = $data->val($i,72);
  $data73 = $data->val($i,73);
  $data74 = $data->val($i,74);
  $data75 = $data->val($i,75);
  $data76 = $data->val($i,76);
  $data77 = $data->val($i,77);
  $data78 = $data->val($i,78);
  $data79 = $data->val($i,79);
  $data80 = $data->val($i,80);
  $data81 = $data->val($i,81);
  $data82 = $data->val($i,82);
  $data83 = $data->val($i,83);
  $data84 = $data->val($i,84);
  $data85 = $data->val($i,85);
  $data86 = $data->val($i,86);
  $data87 = $data->val($i,87);
  $data88 = $data->val($i,88);
  $data89 = $data->val($i,89);
  $data90 = $data->val($i,90);
  $data91 = $data->val($i,91);
  $data92 = $data->val($i,92);
  $data93 = $data->val($i,93); 
  $data94 = $data->val($i,94);
  $data95 = $data->val($i,95);
  $data96 = $data->val($i,96);
  $data97 = $data->val($i,97);
  $data98 = $data->val($i,98);
  $data99 = $data->val($i,99);
  $data100 = $data->val($i,100);
  $data101 = $data->val($i,101);
  $data102 = $data->val($i,102);
  $data103 = $data->val($i,103);
  $data104 = $data->val($i,104);
  $data105 = $data->val($i,105);
  $data106 = $data->val($i,106);
  $data107 = $data->val($i,107);
  
  
$query = "INSERT INTO tb_student VALUES ('$data1','$data2','$data3','$data4','$data5','$data6','$data7','$data8','$data9','$data10','$data11','$data12','$data13','$data14','$data15','$data16','$data17','$data18','$data19','$data20','$data21','$data22','$data23','$data24','$data25','$data26','$data27','$data28','$data29','$data30','$data31','$data32','$data33','$data34','$data35','$data36','$data37','$data38','$data39','$data40','$data41','$data42','$data43','$data44','$data45','$data46','$data47','$data48','$data49','$data50','$data51','$data52','$data53','$data54','$data55','$data56','$data57','$data58','$data59','$data60','$data61','$data62','$data63','$data64','$data65','$data66','$data67','$data68','$data69','$data70','$data71','$data72','$data73','$data74','$data75','$data76','$data77','$data78','$data79','$data80','$data81','$data82','$data83','$data84','$data85','$data86','$data87','$data88','$data89','$data90','$data91','$data92','$data93','$data94','$data95','$data96','$data97','$data98','$data99','$data100','$data101','$data102','$data103','$data104','$data105','$data106','$data107')";
$hasil = mysql_query($query);

if ($hasildata) $sukses++;
else $gagal++;
  
echo "<pre>";
print_r($query);
echo "</pre>";

}
echo "<b>import data selesai.</b> <br>";
echo "Data yang berhasil di import : " . $sukses .  "<br>";
echo "Data yang gagal diimport : ".$gagal .  "<br>";
echo "kembali ke halaman <a href='index.php?page=import'>Import </a>";
echo "ke halaman <a href='index.php?page=data-siswa'>Data Siswa</a>";
?>
