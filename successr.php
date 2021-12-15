<?php
    require_once 'db/conn.php';

    if(isset($_POST['submit'])){
        $name = $_POST['nama'];
        $user = $_POST['username'];
        $pass = $_POST['password'];
        $isSuccessc = $crud->insertEditor($name, $user, $pass);

    }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Succes Menambah</title>
  <link href="assets/img/4.png" rel="icon">
	<link rel="stylesheet" type="text/css" href="style11.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-image: url(assets/img/3.png)">

<div class="container">
	<div class="header" style="margin-top: -10px;">
		<h1 class="judul" style="font-family: Commissioner;">green.visual</h1>
		<ul>
			<li><a href="masukadm.php" style="margin-right: 30px;">Tabel</a></li>
			</ul>
	</div>

	<div class="gambar" style="background-image: url(assets/img/1.png);margin-top: -22px">
		<h1 style="color: white; font-size: 40px; font-family: Futura Bk BT; text-align: center; margin-top: 125px; letter-spacing: 8px;">GREENECE</h1>
		<h1 style="color: white; font-size: 20px; font-family: GeosansLight; text-align: center; margin-top: 20px; letter-spacing: 8px;">green . eco . environment </h1>
	</div>

	<div class="konten cf">
    <br>
    <br>
    <h2 style="text-align: center;">Data Submit</h2>
    <p style="text-align: center;">Silahkan cek data dibawah ini apakah sudah benar atau belum, jika belum maka daftar ulang</p>
	<h2 style="text-align: center;">----------</h2>
    <br>
    <div class="card" style="width: 600px; margin: auto;">
      <div class="card-body">
        <h4><?php echo $_POST['nama']?></h4>
        <p style="margin-top:10px">Username = <?php echo $_POST['username']?></span>
        <p>Password = <?php echo $_POST['password']?></p>
      </div>
    </div>
    <br>
    <br>
    <br>

	
	</div>
	<div class="footer">
	<p class="copy" style="margin-top:10px"> Copyright 2021. SupriatnaDA</p>
	</div>


</body>
</html>