<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
<!-- 	<link rel="stylesheet" type="text/css" href="style11.css">
 -->	
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body style="background-image: url(assets/img/3.png)">

<div class="container">

	<div class="gambar">
		<h1 style="color: white; font-size: 40px; font-family: Futura Bk BT; text-align: center; margin-top: 125px; letter-spacing: 8px;">GREENECE</h1>
		<h1 style="color: white; font-size: 20px; font-family: GeosansLight; text-align: center; margin-top: 10px; letter-spacing: 8px;">green . eco . environment </h1>
		<br>
		<br>
	</div>

	<div class="konten cf" style="margin-top: 50px">

		<div class="row content d-flex justify-content-center">
          <div class="col-lg-6">
            <p style="text-align: center; color: white;">
              Mohon isi username dan password dengan benar :
            </p>
            <br>
        </div>
        <?php
            require_once 'db/conn.php';

            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $usernamel = $_POST['usernamel'];
                $passwordl = $_POST['passwordl'];

                $result = $user->getAdmin($usernamel, $passwordl);
                if(!$result){
                    $result2 = $user->getEditor($usernamel, $passwordl);
                    if($result2){
                        $_SESSION['usernamel'] = $usernamel;
                        $_SESSION['passowrdl'] = $result2['passwordl'];
                        header("Location: masuked.php");
                    }else{
                        echo '<div class = "alert alert-danger d-flex justify-content-center"> Username or Password is incorrect! Please try again! </div>';
                    }
                }else if($result){
                    $_SESSION['usernamel'] = $usernamel;
                    $_SESSION['passowrdl'] = $result['passwordl'];
                    header("Location: masukadm.php");
                }else{
                  echo '<div class = "alert alert-danger d-flex justify-content-center"> Username or Password is incorrect! Please try again! </div>';
                }
            }
        ?>
        <form action = "<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="post" style="margin-top: -50px;">
            <br>
                <label for="usernamel" style="color: white;">Username</label>
                <input required type="text" class="form-control" id="usernamel" name="usernamel" style="width:600px; margin: auto;">
            <br>
                <label for="passwordl" style="color: white;">Password</label>
                <input required type="password" require class="form-control" id="passwordl" name="passwordl" style="width:600px; margin: auto;">
            <br>
            <br>
            <button style="background-color:#37517e; border-color: #37517e;" type="submit" name="submit" class="btn btn-primary btn-md">Submit</button>
        </form>
</body>
</html>