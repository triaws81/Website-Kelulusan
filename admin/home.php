<html>
<head>
    <title>Halaman Login</title>
</head>
<body>
<h3>Halaman Administrator</h3>
<div class="well">
<div align="right"><SCRIPT language=JavaScript src="../js/almanak.js"></SCRIPT> 
          <span class="style1">I</span> <SCRIPT language=JavaScript>var d = new Date();
var h = d.getHours();
if (h < 11) { document.write('Selamat pagi, admin'); }
else { if (h < 15) { document.write('Selamat siang, admin'); }
else { if (h < 19) { document.write('Selamat sore, admin'); }
else { if (h <= 23) { document.write('Selamat malam, admin'); }
}}}</SCRIPT>   </div>
 <h4><div style="padding:10px;">Selamat Datang, admin silahkan atur database pada menu yang tersedia.</strong></div></h4>
<p><strong>Pengaturan setting web :</strong><ol>
<li>Buat database pada phpmyadmin import database contoh
<li>Edit file config.php sesuaikan dengan nama database 
<li>Edit index.php dengan notepad++ sesuaikan Nama Sekolah dan Kata Sambutan, pada baris 70 sesuaikan tanggal dan jam pengumuman
<li>Edit folder image sesuaikan file stempel, tanda tangan dan logo (kalau bisa ukurannya sesuai dengan contoh yang ada, mudahnya buka pakai Photoshop kemudian sesuaikan
<li>Buka folder Content edit semua file tersebut dengan notepad++
<li>Setelah dibuka di notepad++ klik menu find kemudian klik tab replace ganti semua teks "2 Pekalongan" dengan SMP bapak / ibu sekalian (pada semua file)
<li>Jika ada kesulitan bisa WA ke no : 081578319619 </ol>
 <p><strong>Pengaturan setting database :</strong><ol>
<li>Silahkan klik menu <a href="index.php?page=import">Import Data</a>
<li>Silahkan klik link download (contoh data excel),
<li>Download contoh data excel
<li>Isi database excel tersebut, kalau sudah selesai hapus header atas (yang digunakan hanya isinya saja, header untuk panduan) kemudian simpan,
<li>Klik browse cari data excel yang sudah diisi tadi
<li>Klikmenu import <br></ol>

<br>
<br>
  <a href="index.php?page=logout">Keluar / Log Out</a>
</div>
</body>
</html>