<?php
    require_once 'db/conn.php';
    $results = $crud->getServ();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Input Costumer</title>
	<link rel="stylesheet" type="text/css" href="style11.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body style="background-image: url(assets/img/3.png)">

<div class="container">
	<div class="header" style="margin-top: -10px;">
		<h1 class="judul" style="font-family: Commissioner;">green.visual</h1>
		<ul>
			<li><a href="index.php" style="margin-right: 30px;">Index</a></li>
			</ul>
	</div>

	<div class="gambar" style="background-image: url(assets/img/1.png);margin-top: -22px">
		<h1 style="color: white; font-size: 40px; font-family: Futura Bk BT; text-align: center; margin-top: 125px; letter-spacing: 8px;">GREENECE</h1>
		<h1 style="color: white; font-size: 20px; font-family: GeosansLight; text-align: center; margin-top: 20px; letter-spacing: 8px;">green . eco . environment </h1>
	</div>

	<div class="konten cf">

	<div class="row content d-flex justify-content-center">
        <div class="col-lg-6">
        	<br>
            <p style="text-align: center;">
              Isi form berikut dengan baik dan benar :
            </p>
        </div>
        <form method="post" action ="success.php">
            <br>
                <label for="nama">Nama</label>
                <input required type="text" class="form-control" id="nama" name="nama">
            <br>
                <label for="nim">Nomor Hp</label>
                <input required type="number" require class="form-control" id="hp" name="hp">
            <br>
                <label for="prodi">Tenggat Waktu</label>
                <input required type="text" class="form-control" id="waktu" name="waktu">
            <br>
                <label for="email" class="form-label">Email address</label>
                <input required type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" >
                <div id="emailHelp" class="form-text">Kami akan menjaga kerahasiaan email anda</div>
            <br>
            <label for="namas">Pilih Jasa :</label>
            <select class="form-control" id="namaj" name="namaj">
            <?php while($r = $results->fetch(PDO::FETCH_ASSOC)){?>
                  <option value="<?php echo $r['id_serv'] ?>"><?php echo $r['nama_serv'];?></option>
            <?php }?>
            </select>
            <br>
            <button style="background-color:#37517e; border-color: #37517e;" type="submit" name="submit" class="btn btn-primary btn-md">Submit</button>
            <br>
            <br>
            <br>
        </form>
	
	</div>
	<div class="footer">
	<p class="copy" style="margin-top:10px"> Copyright 2021. SupriatnaDA</p>
	</div>


</body>
</html>