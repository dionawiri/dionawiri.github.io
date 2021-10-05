<?php 


	session_start();
	include 'koneksi.php';

	if(isset($_POST['login'])){

		// cek akun ada apa tidak
		$cek = mysqli_query($conn_ekstra, "SELECT * FROM admin_paskib
			WHERE username = '".htmlspecialchars($_POST['username'])."' AND password = '".htmlspecialchars($_POST['password'])."' ");


		if(mysqli_num_rows($cek) > 0){
			$a = mysqli_fetch_object($cek);

			$_SESSION['login_paskib'] = true;
			$_SESSION['id'] = $a->id;
			$_SESSION['username'] = $a->username;
			echo '<script>window.location="admin.php"</script>';
		}else{
			$error = true;
		}
	}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" href="../img/Logo_Ekstra/Paskib.png" type="image/gif" sizes="16x16" />
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- footer -->
    <link rel="stylesheet" href= />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/admin/login_admin.css" />
    <title>Login Admin | PASKA PERSADA</title>

</head>

<body>



    <?php if(isset($error)) : ?>
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
        <symbol id="check-circle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
        </symbol>
        <symbol id="info-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
        </symbol>
        <symbol id="exclamation-triangle-fill" fill="currentColor" viewBox="0 0 16 16">
            <path
                d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
        </symbol>
    </svg>

    <div class="alert alert-danger d-flex align-items-center" role="alert">
        <div class="peringatan">
            <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:">
                <use xlink:href="#exclamation-triangle-fill" /></svg>
            Opss Username / Password salah,coba lagi ya ;(
        </div>
    </div>
    <?php endif; ?>

    <!-- akhir pringatan -->

    <!-- teks login -->


    <div class="global-container">
        <div class="card login-form shadow">
            <div class="card-body text-center">
                <h1 class="card-title"style="margin-top:-10px" >L O G I N</h1>
                <p class="fw-bold ">
                 ADMIN
                </p>
                <img src="../../img/Logo_Ekstra/Paskib.png"  style="width: 45px;  margin: 2px 0px 10px" />
            </div>
            <div class="card-text">
                <form action="" method="POST">
                    <div class="mb-3">
                        <input type="username" class="form-control" name="username" id="username"
                            aria-describedby="emailHelp " autofocus placeholder="Username" required />
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" name="password" id="password" autofocus
                            placeholder="Password" required />
                    </div>
                    <div class="d-grid gap-2 pb-2  pt-5 mb-2"><button type="submit" name="login"
                            class="btn btn-warning" >Submit</button></div>
                </form>
            </div>
        </div>
    </div>
    <footer>
        <div class="footer-bottom">
            <p><?php echo "Copyright © 2020-" . (int)date('Y'). ",Designet By" ?> <span>BalioMa</span></p>
        </div>
    </footer>
</body>
<!-- js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
</script>

</html>

<!-- akhir login -->






</body>

</html>

<!-- akhir login -->