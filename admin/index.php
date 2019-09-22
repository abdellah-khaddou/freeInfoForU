<?php 
	session_start();
	$pageTitre = 'Login';
	
	if(isset($_SESSION['root'])){
		header("location:Acceuil.php");
	}
	include "init.php";
	if($_SERVER['REQUEST_METHOD'] == 'POST'){ 
		$user = $_POST['user'];
		$pass = $_POST['password'];
		$pass = sha1($pass);
		$stmt = $con->prepare("SELECT * FROM users WHERE username=? AND password=? AND groupe_id=1 limit 1");
		$stmt->execute(array($user,$pass));
		$row = $stmt->fetch();
		if($stmt->rowCount()>0){
			$_SESSION['root'] = $user;
			$_SESSION['ID']   = $row['ID_Us'];
			header("location:Acceuil.php");
			exit();
		}
	}
	

?>
<div class="login">
	<div class="container">
		<div class="shadow-lg login-card" data-aos="fade-down" data-aos-duration="1450" style="margin-top: 150px;">
			<div style="margin-bottom: 30px;">
				<h2 class="text-center">LOGIN</h2>
			</div>
				<img class="img-fluid shadow profile-img-card" src="<?php echo $css ?>/img/avatar_2x.png">
				<p class="profile-name-card"> </p>
			<form class="form-signin" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
				<input class="form-control shadow" type="text" name="user" placeholder="user name" autofocus="" autocomplete="on" required="" maxlength="20" minlength="5">
				<input class="shadow form-control" type="password" id="inputPassword" name="password" required="" placeholder="Password">
				<button class="btn btn-primary btn-lg shadow btn-signin" name="login" type="submit">Login </button>
			</form><a class="forgot-password" href="#passwordRecuperar.html">Forget password?</a>
		</div>
	</div>
</div>

<?php include $tpl.'footer.php'?>