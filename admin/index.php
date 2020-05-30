
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pengumuman Kelulusan SMPN 2 Pekalongan</title>
    <link rel="stylesheet" href="../css/bootstrap.css" media="screen">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
  <div class="container">
<div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle btn-primary" data-toggle="collapse" data-target=".navbar-collapse">
              Menu
            </button>
            <a class="navbar-brand" href="index.php?page=home"><img src="../images/logo.png" width="42" height="48" class="barlogo"></a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
            <li>
              <a href="index.php?page=home">Beranda</a>
            </li>
            <li>
              <a href="index.php?page=data-siswa">Data Siswa</a>
            </li>
            <li>
              <a href="index.php?page=import">Import Data</a>
            </li>
            <li>
              <a href="index.php?page=logout">Logout</a>
            </li>
          </ul>
        </div>
  </div>
      </div>
      <table width="800" align="center">
  <tr>
    <td>
          <?php

		  require "../config.php";

		   $page=$_GET['page'];
		   $filename="$page.php";
		   if (!file_exists($filename))
        {
         include "home.php";
        }
            else
        {@include "$page.php";}
        ?>
      </td>
	 
  </tr>
</table>
    <script type="text/javascript" async="" src="./js/ga.js"></script>
    <script src="../js/jquery-1.10.2.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootswatch.js"></script>
</body>
<center>
<h6>Develop by :<a href="https://www.facebook.com/tripamungkas">&nbsp;AWS</a> | Tim IT SMP 2 Pekalongan | Medio 2020 | bootstrap</h6>
</html>
