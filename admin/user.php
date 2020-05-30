<script type="text/javascript">
	$(document).ready(function() {
		$(".delbutton").click(function(){
		 var element = $(this);
		 var del_id = element.attr("id");
		 var info = 'id=' + del_id;
		 if(confirm("Anda yakin akan menghapus?"))
		 {
			 $.ajax({
			 type: "POST",
			 url : "hapuspetugas.php",
			 data: info,
			 success: function(){
			 }
			 });	
		 $(this).parents(".content").animate({ opacity: "hide" }, "slow");
 			}
		 return false;
		 });
	})
	</script>
<link href="../css/thickbox.css" rel="stylesheet" type="text/css" />
<script src="../js/thickbox.js" type="text/javascript"></script>
<h2>Daftar Petugas / User ASIK</h2>
<div class="cleaner_h5"></div>
<div class="well">
<fieldset>
<legend>Daftar Nama-Nama Petugas / User ASIK</legend>
<table class="table table-striped table-hover">
<tr><td>No.</td><td>Nama Pengguna</td><td>Username</td><td>Status</td><td>Aksi</td></tr>
<?php
include('../config.php');
$q = mysql_query("select * from tbl_user");
$n = 1;
while($r = mysql_fetch_array($q))
{
	echo '<tr class="content"><td>'.$n.'</td><td>'.$r["nama"].'</td><td>'.$r["username"].'</td><td>Petugas</td>
	<td><a href="#" class="delbutton" id="'.$r['id_user'].'" href="#" ><div id="box-link">Hapus</div></a></td>
	</tr>';
	$n++;
}
?>
</table>
</fieldset>
</div>
<br />
<a href="index.php?page=tambah-user" class="btn btn-primary">Tambah User</a>

	