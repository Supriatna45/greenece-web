<?php 
    require_once 'db/conn.php';
    $results = $crud->getCst2();
?> 
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Admin</title>
	<link href="assets/img/4.png" rel="icon">
	<link rel="stylesheet" type="text/css" href="style11.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<!-- Jquery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script>
	    $(document).ready(function(){
	      $('.search').on('keyup',function(){
	        var searchTerm = $(this).val().toLowerCase();
	        $('#table tbody tr').each(function(){
	          var lineStr = $(this).text().toLowerCase();
	          if(lineStr.indexOf(searchTerm)==-1){
	            $(this).hide('#table tr');
	          }else{
	            $(this).show('#table tr');
	          }
	        });
	      });
	    });
	  </script>
	</head>
<body style="background-image: url(assets/img/3.png)">

<div class="container">
	<div class="header" style="margin-top: -10px;">
		<h1 class="judul" style="font-family: Commissioner;">green.visual</h1>
		<ul>
			<li><a href="index.php" style="margin-right: 20px;">Index</a></li>
			<li><a href="form.php" style="margin-right: 20px;">Input</a></li>
			<li><a href="logout.php" style="margin-right: 30px;">Logout</a></li>
		</ul>
	</div>

	<div class="gambar" style="background-image: url(assets/img/1.png);margin-top: -22px">
		<h1 style="color: white; font-size: 40px; font-family: Futura Bk BT; text-align: center; margin-top: 125px; letter-spacing: 8px;">GREENECE</h1>
		<h1 style="color: white; font-size: 20px; font-family: GeosansLight; text-align: center; margin-top: 20px; letter-spacing: 8px;">green . eco . environment </h1>
	</div>

	<div class="konten cf">

 	<br>
    <br>
    <h2 style="text-align: center;">Data Customer</h2>
    <p style="text-align: center;">Klik tombol 'edit' untuk mengedit data costumer dan 'delete' untuk hapus data.</p>
	<h2 style="text-align: center;">----------</h2>
    <br>

    <p style="text-align: center;">Cari data yang dibutuhkan :       </p>
    <input type="text" class="form-control search" placeholder="Ketikkan kata kunci" name="view" style="width: 400px; margin:auto;">
    <br>

    <table class="table table-bordered" id="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Costumer</th>
            <th>No Hp</th>
            <th>Tenggat</th>
            <th>Email</th>
            <th>Jasa</th>
            <th>Aksi</th>
        </tr>
    <thead>
        <?php while($r = $results->fetch(PDO::FETCH_ASSOC)){ ?>
    <tbody>
              <tr>
                  <td style="text-align:center"><?php echo $r['idcst'] ?></td>
                  <td><?php echo $r['namacst'] ?></td>
                  <td><?php echo $r['nohp'] ?></td>
                  <td><?php echo $r['deadline'] ?></td>
                  <td><?php echo $r['emcst'] ?></td>
                  <td><?php echo $r['nama_serv'] ?></td>
                  <td>
                  	<a onclick="return confirm('Are you sure?');" href="successd.php?id=<?php echo $r['idcst'] ?>" class="btn btn-danger">Delete</a>
                  </td>
              </tr>
    <tbody>
        <?php }?>
    </table>
    <br>
    <br>
	
	</div>
	<div class="footer">
	<p class="copy" style="margin-top:10px"> Copyright 2021. SupriatnaDA</p>
	</div>


</body>
</html>