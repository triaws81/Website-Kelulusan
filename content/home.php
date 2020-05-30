<html>
<head>
<title> Halaman Pencarian </title>
</head>
<body>
<h3 align="center">Selamat datang di <br/>Pengumuman Kelulusan SMPN 2 Pekalongan</h3>
<div class="well">
<div align="center"><SCRIPT language=JavaScript src="js/almanak.js"></SCRIPT> 
          <span class="style1">I</span> <SCRIPT language=JavaScript>var d = new Date();
var h = d.getHours();
if (h < 11) { document.write('Selamat pagi, kawan'); }
else { if (h < 15) { document.write('Selamat siang, kawan'); }
else { if (h < 19) { document.write('Selamat sore, kawan'); }
else { if (h <= 23) { document.write('Selamat malam, kawan'); }
}}}</SCRIPT>   </div><br/>
<script>
function cekNo() {
   var cek = document.forms['formcarino']['tgl_lhr'].value and ['noujian'].value;
     if(cek==null || cek=="")
     {
       alert("Username & Password harus di isi dahulu!");
       return false;
     }
}
</script>
<form class="form-horizontal" form name="formcarino" method="post" action="index.php?page=searchno" onSubmit="return cekNo()">
<fieldset>
  <div align="center">
    <legend> Masukkan Username dan Password Anda</legend>
  </div>
  <div class="form-group">
      <label for="noujian" class="col-lg-2 control-label">Username </label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="noujian" placeholder="Diisi NIS Contoh : 10101" size="30" >
      </div><br>
	  <label for="tgl_lhr" class="col-lg-2 control-label">Password</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="tgl_lhr" placeholder="Diisi Tgl. Lahir Format (DDMMYY) Contoh : 101001" size="30" >
      </div>
  </div>
      <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <input type="SUBMIT" name="SUBMIT" id="SUBMIT" value="LOGIN" class="btn btn-primary">
      </div>
    </div>
</fieldset>
</form>
</div>
</body>
</html>